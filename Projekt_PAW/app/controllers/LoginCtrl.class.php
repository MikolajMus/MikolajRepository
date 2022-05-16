<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;
	private $users;

    public function __construct() {
        //stworzenie obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, poniewaz brak parametrow
        if (!isset($this->form->login))
            return false;

        // sprawdzenie czy potrzebne wartosci zostałyu przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

		$where = "";

		try {
			$this->users = App::getDB()->select("users", [
                "id_user",
                "email",
                "password",
                "role",
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania użytkowników');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
		foreach($this->users as $u){

        // sprawdzenie, czy dane logowania poprawne
        if ($this->form->login == $u ["email"] && $this->form->pass == $u ["password"]) {
			if($u ["role"] == "admin") {
            RoleUtils::addRole('admin');
			RoleUtils::addRole('user');
			}
			else if ($u ["role"] == "klient"){
			RoleUtils::addRole('user');

        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }

        return !App::getMessages()->isError(); }
    }
}

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("productList");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('start');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }
}

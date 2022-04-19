<?php

namespace app\controllers;

Class Bazadanych {

    public function action_showBazadanych() {
        if (!inRole('admin')) {

            getMessages()->addError("Ty sio!");

            forwardTo('calcShow');
        } else {
            $this->getFromDatabase();
            $this->generateView();
        }
    }

    private function getFromDatabase() {
        $data = getDatabase()->select("wynik", [
            "idwynik",
            "$",
            "lat",
            "%",
            "rata",
            "data"
        ]);
        getSmarty()->assign('data', $data);
    }

    public function generateView() {
        getSmarty()->assign('user', unserialize($_SESSION['user']));
        getSmarty()->assign('page_title', 'Historia');
        getSmarty()->display('Bazadanychview.tpl');
    }

}

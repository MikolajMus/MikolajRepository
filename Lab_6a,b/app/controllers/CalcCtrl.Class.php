<?php


namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

	private $form;
	private $result;

	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

	public function getParams(){
		$this->form->x = getFormRequest('x');
		$this->form->y = getFormRequest('y');
		$this->form->z = getFormRequest('z');
 }



public function validate() {

if ( ! (isset($this->form->x ) && isset($this->form->y)  && isset($this->form->z))){


	return false;

}

// sprawdzenie, czy wartosci zostały podane
if ( $this->form->x == "") {
	getMessages()->addError('Nie podano kwoty');
}
if ( $this->form->y == "") {
	getMessages()->addError('Nie podano lat kredytu');
}
if ( $this->form->z == "") {
	getMessages()->addError('Nie podano oprocentowania');
}

//nie ma sensu walidować dalej gdy brak parametrów
if (! getMessages()->isError()){

	// sprawdzenie, czy $x i $y są liczbami całkowitymi
    if (! is_numeric( $this->form->x )||!$this->form->x>0) {
		     getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
	}

    if (! is_numeric( $this->form->y )||!$this->form->y>0) {
		     getMessages()->addError('Druga wartość nie jest liczbą większą od zera');
	}
    if (! is_numeric( $this->form->z )||!$this->form->z>0) {
		     getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
	}
}
		return ! getMessages()->isError();
}


public function process(){

 		$this->getParams();

 		if ($this->validate()) {

	//konwersja parametrów na int
	      $this->form->x = intval($this->form->x);
	      $this->form->y = intval($this->form->y);
	      $this->form->z = intval($this->form->z);
				getMessages()->addInfo('Paranetry poprawne');

	//wykonanie operacji
        $x =$this->form->x;
				$y =$this->form->y*12;
				$z =$this->form->z/100;

				$result = ($x*$z)/(12*(1-((12/(12+$z))**$y)));
				$this->result->result = number_format($result, 1, ',', ' ');
		getMessages()->addInfo('Wykonano obliczenie');
}
 	  $this->generateView();
}
public function generateView(){



getSmarty()->assign('page_title','Przykład 06a,b');
getSmarty()->assign('page_description','Kalkulator kredytowy L_6');
getSmarty()->assign('page_header','Kontroler główny');

getSmarty()->assign('form',$this->form);
getSmarty()->assign('res',$this->result);


getSmarty()->display('CalcView.tpl');
}
}

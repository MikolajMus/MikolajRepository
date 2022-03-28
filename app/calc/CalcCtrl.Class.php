<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';



class CalcCtrl {

	private $msgs;
	private $form;
	private $result;

	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

	public function getParams(){
		$this->form->x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
		$this->form->y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
		$this->form->z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
 }



public function validate() {

if ( ! (isset($this->form->x ) && isset($this->form->y)  && isset($this->form->z))){


	return false;

} else {
		$this->hide_intro = true;
}


// sprawdzenie, czy wartosci zostały podane
if ( $this->form->x == "") {
	$this->msgs->addError('Nie podano kwoty');
}
if ( $this->form->y == "") {
	$this->msgs->addError('Nie podano lat kredytu');
}
if ( $this->form->z == "") {
	$this->msgs->addError('Nie podano oprocentowania');
}

//nie ma sensu walidować dalej gdy brak parametrów
if (! $this->msgs->isError()){

	// sprawdzenie, czy $x i $y są liczbami całkowitymi
    if (! is_numeric( $this->form->x )||!$this->form->x>0) {
		     $this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
	}

    if (! is_numeric( $this->form->y )||!$this->form->y>0) {
		     $this->msgs->addError('Druga wartość nie jest liczbą większą od zera');
	}
    if (! is_numeric( $this->form->z )||!$this->form->z>0) {
		     $this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
	}
}
		return ! $this->msgs->isError();
}


public function process(){

 		$this->getParams();

 		if ($this->validate()) {

	//konwersja parametrów na int
	      $this->form->x = intval($this->form->x);
	      $this->form->y = intval($this->form->y);
	      $this->form->z = intval($this->form->z);
				$this->msgs->addInfo('Paranetry poprawne');

	//wykonanie operacji
        $x =$this->form->x;
				$y =$this->form->y*12;
				$z =$this->form->z/100;

				$result = ($x*$z)/(12*(1-((12/(12+$z))**$y)));
				$this->result->result = number_format($result, 1, ',', ' ');
		$this->msgs->addInfo('Wykonano obliczenie');
}
 	  $this->generateView();
}
public function generateView(){
	global $conf;

$smarty = new Smarty();
$smarty->assign('conf',$conf);

$smarty->assign('page_title','Przykład 06');
$smarty->assign('page_description','Kalkulator kredytowy L_6');
$smarty->assign('page_header','Kontroler główny');

$smarty->assign('form',$this->form);
$smarty->assign('res',$this->result);
$smarty->assign('msgs',$this->msgs);



$smarty->display($conf->root_path.'/app/calc/CalcView.html');
}
}

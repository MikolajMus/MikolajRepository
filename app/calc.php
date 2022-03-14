<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';



include _ROOT_PATH.'/app/security/check.php';
//z-operacja

function getParams(&$x,&$y,&$z){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
}



function validate(&$x,&$y,&$z,&$messages){

if ( ! (isset($x) && isset($y)  && isset($z))) {
	return false;

}

// sprawdzenie, czy wartosci zostały podane
if ( $x == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $y == "") {
	$messages [] = 'Nie podano lat kredytu';
}
if ( $z == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (count( $messages ) != 0) return false;

	// sprawdzenie, czy $x i $y są liczbami całkowitymi
    if (! is_numeric( $x )) {
		     $messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}

    if (! is_numeric( $y )) {
		     $messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}
    if (! is_numeric( $z )) {
		     $messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
		if (count($messages) != 0) return false;
		else return true;
}


function process(&$x,&$y,&$z,&$messages,&$result){
global $role;
	//konwersja parametrów na int
	      $x = intval($x);
	      $y = intval($y);
	      $z = intval($z);


	//wykonanie operacji
if ($role == 'admin'){
	$z=12*$z;
	$y=$y/100;
$result = ($x*$y)/(12*(1-((12/(12+$y))**$z)));
}else{
	if ($x>2000)
	$messages[] = 'Tylko admin moze brac kredyt na wiecej niz 2000';
}

$x = null;
$y = null;
$z = null;
$result = null;
$messages = array();


getParams($x,$y,$operation);
	if ( validate($x,$y,$operation,$messages) ) {
 process($x,$y,$operation,$messages,$result);

}
}

include 'calc_view.php';
?>

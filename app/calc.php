<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';



require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';
//z-operacja

function getParams(&$form){
	$form['x'] = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$form['y'] = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$form['z'] = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
}



function validate(&$form,&$infos,&$hide_intro,&$messages){

if ( ! (isset($form['x']) && isset($form['y'])  && isset($form['z'])))
	return false;

$hide_intro = true;

$infos [] = 'Przekazano parametry.';

// sprawdzenie, czy wartosci zostały podane
if ( $form['x'] == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $form['y'] == "") {
	$messages [] = 'Nie podano lat kredytu';
}
if ( $form['z'] == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (count( $messages ) != 0) return false;

	// sprawdzenie, czy $x i $y są liczbami całkowitymi
    if (! is_numeric( $form['x'] )||!$form['x']>0) {
		     $messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}

    if (! is_numeric( $form['y'] )||!$form['y']>0) {
		     $messages [] = 'Druga wartość nie jest liczbą większą od zera';
	}
    if (! is_numeric( $form['z'] )||!$form['z']>0) {
		     $messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}
		if (count($messages) != 0) return false;
		else return true;
}


function process(&$form,&$infos,&$messages,&$result){
global $role;
	//konwersja parametrów na int
	      $form['x'] = intval($form['x']);
	      $form['y'] = intval($form['y']);
	      $form['z'] = intval($form['z']);


	//wykonanie operacji
	if ($role != 'admin' &&$form['x']>2000){
		$messages[] = 'Tylko admin moze brac kredyt na wiecej niz 2000';
}
 else{
	$form['z']=12*$form['z'];
	$form['y']=$form['y']/100;
	$result = ($form['x']*$form['y'])/(12*(1-((12/(12+$form['y']))**$form['z'])));
	}
}
$result=null;
$messages = array();
getParams($form);
	if ( validate($form,$infos,$hide_intro,$messages) ) {
 process($form,$infos,$messages,$result);

}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');


$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);


$smarty->display(_ROOT_PATH.'/app/calc.html');

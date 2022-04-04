<?php

require_once 'init.php';



$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';


switch ($action) {
	default :


		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :



		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process();
	break;
	case 'action1' :
	 print('Cześć');
	break;
	case 'action2' :
	 print('Trzymaj się');
	break;
}

<?php

require_once 'core/Config.class.php';
$conf = new core\Config();
require_once 'config.php'; //ustaw konfigurację

function &getConf(){
	global $conf; return $conf;
}

require_once 'core/Messages.class.php';
$msgs = new core\Messages();

function &getMessages(){
	global $msgs; return $msgs;
 }

$smarty = null;
function &getSmarty(){
	global $smarty;
	if (!isset($smarty)){

		include_once 'lib/smarty/Smarty.class.php';
		$smarty = new Smarty();

		$smarty->assign('conf',getConf());
		$smarty->assign('msgs',getMessages());

		$smarty->setTemplateDir(array(
			'one' => getConf()->root_path.'/app/views',
			'two' => getConf()->root_path.'/app/views/templates'
		));
	}
	return $smarty;
}

require_once 'core/ClassLoader.class.php';
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

require_once 'core/Router.class.php'; //załaduj i stwórz router
$router = new core\Router();
function &getRouter(): core\Router {
    global $router; return $router;
}

require_once 'core/functions.php';

session_start(); //uruchom lub kontynuuj sesję
$conf->roles = isset($_SESSION['_roles']) ? unserialize($_SESSION['_roles']) : array(); //wczytaj role

$router->setAction( getFromRequest('action') );

require_once 'Medoo/Medoo.class.php';
try{
		$database = new Medoo\medoo([
			'type' => 'mysql',
			'host' => 'localhost',
			'database' => 'c',
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'collation' => 'utf8_general_ci',
			'port' => 3306,
			'logging' => true,
			'option' => [
					PDO::ATTR_CASE => PDO::CASE_NATURAL,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			],
		]);
} catch (PDOException $ex) {
		getMessages()->addError("DB Error: " . $ex->getMessage());
}
function &getDatabase(): Medoo\Medoo {
		global $database;
		return $database;
}

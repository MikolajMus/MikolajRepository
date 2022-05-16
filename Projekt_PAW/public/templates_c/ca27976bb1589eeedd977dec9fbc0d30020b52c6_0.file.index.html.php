<?php
/* Smarty version 4.1.0, created on 2022-05-16 16:12:44
  from 'C:\xampp\htdocs\Projekt_PAW\app\views\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62825bdcd0d131_08154079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca27976bb1589eeedd977dec9fbc0d30020b52c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_PAW\\app\\views\\templates\\index.html',
      1 => 1652710358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62825bdcd0d131_08154079 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Sklep</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
			<header id="header">
				<h1>Sklep Zoologiczny</h1>
			</header>
			<div class="pure-menu pure-menu-horizontal bottom-margin">
				<!--<input type=button href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" value="Zaloguj" />-->
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
start" class="pure-menu-heading pure-menu-link">Strona Główna</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productList" class="pure-menu-heading pure-menu-link">Lista produktów</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
KoszykShow" class="pure-menu-heading pure-menu-link">Koszyk</a>
			</div>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104265176862825bdcd0c964_15084138', 'top');
?>

			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Untitled.</li><li>Credits: <a href="http://html5up.net">HTML5 UP</a></li>
					<li>	<p> Mikołaj Muś <br/>
							  +48 455633456 <br>
								Będzińska 22, Sosnowiec
						</p></li>
				</ul>

			</footer>


			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html>
<?php }
/* {block 'top'} */
class Block_104265176862825bdcd0c964_15084138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_104265176862825bdcd0c964_15084138',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
}

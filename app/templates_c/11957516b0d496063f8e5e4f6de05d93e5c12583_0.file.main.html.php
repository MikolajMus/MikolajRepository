<?php
/* Smarty version 4.1.0, created on 2022-03-28 11:50:18
  from 'C:\Users\Aresweet\Desktop\Nowy folder (6)\htdocs\MikolajRepository\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241a0fab23d18_68220791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11957516b0d496063f8e5e4f6de05d93e5c12583' => 
    array (
      0 => 'C:\\Users\\Aresweet\\Desktop\\Nowy folder (6)\\htdocs\\MikolajRepository\\templates\\main.html',
      1 => 1648463104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241a0fab23d18_68220791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">	
</head>
<body>

<div class="header">
	<h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<p>
		<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>

	</p>
</div>

<div class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7443863276241a0fab230d7_06579781', 'content');
?>

</div><!-- content -->

<div class="footer">
	<p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8401797666241a0fab237a0_72611451', 'footer');
?>

	</p>
	<p>
		Widok oparty na stylach <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. (autor przykładu: Przemysław Kudłacik)
	</p>
</div>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_7443863276241a0fab230d7_06579781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7443863276241a0fab230d7_06579781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_8401797666241a0fab237a0_72611451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8401797666241a0fab237a0_72611451',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}

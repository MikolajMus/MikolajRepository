<?php
/* Smarty version 4.1.0, created on 2022-03-21 10:56:49
  from 'C:\Users\Aresweet\Desktop\Nowy folder (6)\htdocs\MikolajRepository\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623859f15f1b89_61206246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a7885c4f4f2bc35b9e71ee3b194c6b0875ee343' => 
    array (
      0 => 'C:\\Users\\Aresweet\\Desktop\\Nowy folder (6)\\htdocs\\MikolajRepository\\app\\calc.html',
      1 => 1647860067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623859f15f1b89_61206246 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1583674770623859f15e3dc6_35486863', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_472077391623859f15e4c29_99828939', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_1583674770623859f15e3dc6_35486863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1583674770623859f15e3dc6_35486863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_472077391623859f15e4c29_99828939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_472077391623859f15e4c29_99828939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Kalkulator kredytowy</h3>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">

	<<fieldset>
	<label for="x">Kwota: </label>
	<input type="text" placeholder="/$" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['x'];?>
"/<><br/>

	<label for="y">Liczba lat: </label>
	<input type="text" placeholder="do 20" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
"/<><br/>

	<label for="z">Oprocentowanie:   <laber/>
	<input type="text" placeholder="%" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['z'];?>
"/<><br/>
	</fieldset>

	<button type="button" class="pure-button pure-button-primary">Oblicz</button>

</form>

<div class="messages">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}

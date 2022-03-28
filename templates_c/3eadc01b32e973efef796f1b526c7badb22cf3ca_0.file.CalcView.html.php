<?php
/* Smarty version 4.1.0, created on 2022-03-28 11:53:23
  from 'C:\Users\Aresweet\Desktop\Nowy folder (6)\htdocs\MikolajRepository\app\calc\CalcView.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6241a1b3357311_27388035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eadc01b32e973efef796f1b526c7badb22cf3ca' => 
    array (
      0 => 'C:\\Users\\Aresweet\\Desktop\\Nowy folder (6)\\htdocs\\MikolajRepository\\app\\calc\\CalcView.html',
      1 => 1648468398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6241a1b3357311_27388035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4250015586241a1b334b1a5_33893680', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19124964776241a1b334ba23_51045535', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'footer'} */
class Block_4250015586241a1b334b1a5_33893680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_4250015586241a1b334b1a5_33893680',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_19124964776241a1b334ba23_51045535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19124964776241a1b334ba23_51045535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Kalkulator kredytowy</h3>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">

	<fieldset>
	<label for="x">Kwota: </label>
	<input id="x" type="text" placeholder="$" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
"/<><br/>

	<label for="y">Liczba lat: </label>
	<input id="y" type="text" placeholder="do 20" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
"/<><br/>

	<label for="z">Oprocentowanie:   <laber/>
	<input id="z" type="text" placeholder="%" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
"/<><br/>
	</fieldset>

	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>

</form>

<div class="messages">

<?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?>
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
<?php }?>


<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}

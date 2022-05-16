<?php
/* Smarty version 4.1.0, created on 2022-05-16 16:09:34
  from 'C:\xampp\htdocs\Projekt_PAW\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62825b1e640034_10924618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '544218c59f5bfa4d876652b1228fe7bbf04a0bc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt_PAW\\app\\views\\LoginView.tpl',
      1 => 1652710172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62825b1e640034_10924618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110997421662825b1e63d127_34820236', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.html");
}
/* {block 'top'} */
class Block_110997421662825b1e63d127_34820236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_110997421662825b1e63d127_34820236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" id="signup-form" method="post" class="pure-form pure-form-aligned bottom-margin">

	<fieldset> <br>
			<input id="id_login" placeholder="Login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
     <br>
			<input id="id_pass" placeholder="Hasło" type="password" name="pass" /><br />
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>
<?php
}
}
/* {/block 'top'} */
}

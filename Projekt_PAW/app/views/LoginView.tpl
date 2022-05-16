{extends file="index.html"}

{block name=top}
<form action="{$conf->action_root}login" id="signup-form" method="post" class="pure-form pure-form-aligned bottom-margin">

	<fieldset> <br>
			<input id="id_login" placeholder="Login" type="text" name="login" value="{$form->login}"/>
     <br>
			<input id="id_pass" placeholder="Hasło" type="password" name="pass" /><br />
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>
{/block}

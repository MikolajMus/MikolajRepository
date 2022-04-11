{extends file="main.tpl"}


{block name=content}


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
	<legend>Kalkulator kredytowy</legend>
	<fieldset>
	<label for="x">Kwota: </label>
	<input id="x" type="text" placeholder="$" name="x" value="{$form->x}"/<><br/>

	<label for="y">Liczba lat: </label>
	<input id="y" type="text" placeholder="do 20" name="y" value="{$form->y}"/<><br/>

	<label for="z">Oprocentowanie:   <laber/>
	<input id="z" type="text" placeholder="%" name="z" value="{$form->z}"/<><br/>
	</fieldset>

	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>

</form>
{include file='messages.tpl'}
{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

{/block}

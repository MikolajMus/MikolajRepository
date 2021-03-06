{extends file="main.tpl"}

{block name=footer}przykładowa tresć stopki {/block}

{block name=content}

<h3>Kalkulator kredytowy</h3>


<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">

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

<div class="messages">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $msgs->getErrors() as $err}
		{strip}
			<li>{$err}</li>
		{/strip}
		{/foreach}
		</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $msgs->getInfos() as $inf}
		{strip}
			<li>{$inf}</li>
		{/strip}
		{/foreach}
		</ol>
{/if}


{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

</div>

{/block}

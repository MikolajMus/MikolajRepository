
{extends file="main.tpl"}

    {block name=content}

        <p> użytkownik: {$user->login}, rola: {$user->role}</p>
        <div class="row">
</p>
<section>
            <ul class="actions">
                <li><a href="{$conf->action_url}calcCompute"  class="pure-menu-heading pure-menu-linkn">Powrót</a></li>
                <li><a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">Wyloguj</a>
                </li>
            </ul>
        </section>
        <section>
            <div class="row">
                <h2> Wyniki </h2>
                    {include file='recordsDB.tpl'}
                </div>
    </section>

    {/block}

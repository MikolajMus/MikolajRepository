<ol>
    {foreach $data as $item}
        {strip}
            <li><u>idwynik</u>: {$item['idwynik']}
                ||||<u> $</u>: {$item['$']}
                ||||<u> liczba lat</u>: {$item['lat']}
                ||||<u> %</u>: {$item['%']}
                ||||<u> rata</u>: {$item['rata']}  
                ||||<u> data</u>: {$item['data']}</li>
            {/strip}
        {/foreach}
</ol>

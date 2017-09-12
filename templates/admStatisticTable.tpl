<table id="IDtbl" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
    <tr>
        {foreach $data as $num => $rowinfo}
            {foreach $rowinfo as $key => $value}
                {if $rowinfo@first}
                    <th title="{$value@key}">{$value@key}</th>
                {/if}
            {/foreach}
        {/foreach}
    </tr>
    </thead>

    <tbody>
    {foreach $data as $rowinfo}
    <tr>
        {foreach $rowinfo as $key => $value}
            <td>{$value}</td>
        {/foreach}
    </tr>
        {/foreach}
    </tbody>
</table>

<script src="./js/shopcart.js"></script>

<canvas id="graphSpace" width="400" height = "800"></canvas>


<table id="IDtbl" class="mdl-data-table" cellspacing="0" width="100%">
    <thead>
        <tr>
            {foreach $data as $num => $rowinfo}
                    {foreach $rowinfo as $key => $value}
                        {if $rowinfo@first}
                        <th>{$value@key}</th>
                        {/if}
                    {/foreach}
            {/foreach}
            <th>Block</th>
        </tr>
    </thead>

    <tbody>
    {foreach $data as $num => $rowinfo}
    <tr>
        {foreach $rowinfo as $key => $value}
            <td{if $value@first} class="admLockUser" {/if}>{$value}</td>
        {/foreach}

        <td class="block" style="width: 5px; padding-right: 0; cursor: pointer;"><i class="material-icons">block</i> </td>
    </tr>
    {/foreach}
    </tbody>
</table>


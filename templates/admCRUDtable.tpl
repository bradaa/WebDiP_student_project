<h4 style="margin-top: 0; text-transform: uppercase">{$tblName}</h4>

<table id="IDtbl" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        {foreach $data as $num => $rowinfo}
            {foreach $rowinfo as $key => $value}
                {if $rowinfo@first}
                    <th>{$value@key}</th>
                {/if}
            {/foreach}
        {/foreach}
        <td id="addRow" style="width: 5px; padding-right: 0; cursor: pointer;"><i class="material-icons">add_box</i> </td>
    </tr>
    </thead>

    <tbody>
    {foreach  $data as $num => $rowinfo}
    <tr>
        {foreach $rowinfo as $key => $value}
            <td id="{$key}" class=".podaci" >{$value}</td>
        {/foreach}
        <td class="delete" style="width: 5px; padding-right: 0; cursor: pointer;"><i style="color: red;" class="material-icons">delete</i> </td>
    </tr>
        {/foreach}
    </tbody>
</table>

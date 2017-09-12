<?php
/* Smarty version 3.1.30, created on 2017-06-16 22:03:03
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\admCRUDtable.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59443977c10f97_60168818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f2ab8e2cf4d53168f5e1d781ba01e9efea86f11' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\admCRUDtable.tpl',
      1 => 1497643376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59443977c10f97_60168818 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 style="margin-top: 0; text-transform: uppercase"><?php echo $_smarty_tpl->tpl_vars['tblName']->value;?>
</h4>

<table id="IDtbl" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'rowinfo', false, 'num');
$_smarty_tpl->tpl_vars['rowinfo']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['rowinfo']->value) {
$_smarty_tpl->tpl_vars['rowinfo']->index++;
$_smarty_tpl->tpl_vars['rowinfo']->first = !$_smarty_tpl->tpl_vars['rowinfo']->index;
$__foreach_rowinfo_0_saved = $_smarty_tpl->tpl_vars['rowinfo'];
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rowinfo']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
$__foreach_value_1_saved = $_smarty_tpl->tpl_vars['value'];
?>
                <?php if ($_smarty_tpl->tpl_vars['rowinfo']->first) {?>
                    <th><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
</th>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php
$_smarty_tpl->tpl_vars['rowinfo'] = $__foreach_rowinfo_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <td id="addRow" style="width: 5px; padding-right: 0; cursor: pointer;"><i class="material-icons">add_box</i> </td>
    </tr>
    </thead>

    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'rowinfo', false, 'num');
$_smarty_tpl->tpl_vars['rowinfo']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['rowinfo']->value) {
$_smarty_tpl->tpl_vars['rowinfo']->index++;
$_smarty_tpl->tpl_vars['rowinfo']->first = !$_smarty_tpl->tpl_vars['rowinfo']->index;
$__foreach_rowinfo_2_saved = $_smarty_tpl->tpl_vars['rowinfo'];
?>
    <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rowinfo']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
$__foreach_value_3_saved = $_smarty_tpl->tpl_vars['value'];
?>
            <td id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class=".podaci" ><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <td class="delete" style="width: 5px; padding-right: 0; cursor: pointer;"><i style="color: red;" class="material-icons">delete</i> </td>
    </tr>
        <?php
$_smarty_tpl->tpl_vars['rowinfo'] = $__foreach_rowinfo_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
</table>
<?php }
}

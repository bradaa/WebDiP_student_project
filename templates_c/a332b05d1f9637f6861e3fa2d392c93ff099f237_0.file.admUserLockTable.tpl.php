<?php
/* Smarty version 3.1.30, created on 2017-06-17 02:08:21
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\admUserLockTable.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594472f5045cf8_30453776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a332b05d1f9637f6861e3fa2d392c93ff099f237' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\admUserLockTable.tpl',
      1 => 1497658098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594472f5045cf8_30453776 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table id="IDtbl" class="mdl-data-table" cellspacing="0" width="100%">
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
$_smarty_tpl->tpl_vars['value']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
$_smarty_tpl->tpl_vars['value']->index++;
$_smarty_tpl->tpl_vars['value']->first = !$_smarty_tpl->tpl_vars['value']->index;
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

            <th>Block</th>
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
$_smarty_tpl->tpl_vars['value']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
$_smarty_tpl->tpl_vars['value']->index++;
$_smarty_tpl->tpl_vars['value']->first = !$_smarty_tpl->tpl_vars['value']->index;
$__foreach_value_3_saved = $_smarty_tpl->tpl_vars['value'];
?>
            <td<?php if ($_smarty_tpl->tpl_vars['value']->first) {?> class="admLockUser" <?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        <td class="block" style="width: 5px; padding-right: 0; cursor: pointer;"><i class="material-icons">block</i> </td>
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

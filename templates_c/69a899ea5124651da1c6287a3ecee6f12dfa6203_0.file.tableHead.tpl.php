<?php
/* Smarty version 3.1.30, created on 2017-06-11 19:32:42
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\admUserLockTable.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593d7eba0df146_10758379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69a899ea5124651da1c6287a3ecee6f12dfa6203' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\admUserLockTable.tpl',
      1 => 1497202355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593d7eba0df146_10758379 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
</td>
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
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <tr>
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

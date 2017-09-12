<?php
/* Smarty version 3.1.30, created on 2017-07-04 07:59:51
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\admStatisticTable.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595b2ed7324dc4_45667807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '602cd25083faaf4f9772b45be563cbfdf2c2660c' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\admStatisticTable.tpl',
      1 => 1499147987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595b2ed7324dc4_45667807 (Smarty_Internal_Template $_smarty_tpl) {
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
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
$__foreach_value_1_saved = $_smarty_tpl->tpl_vars['value'];
?>
                <?php if ($_smarty_tpl->tpl_vars['rowinfo']->first) {?>
                    <th title="<?php echo $_smarty_tpl->tpl_vars['value']->key;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
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

    </tr>
    </thead>

    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'rowinfo');
$_smarty_tpl->tpl_vars['rowinfo']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rowinfo']->value) {
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

    </tr>
        <?php
$_smarty_tpl->tpl_vars['rowinfo'] = $__foreach_rowinfo_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
</table>

<?php echo '<script'; ?>
 src="./js/shopcart.js"><?php echo '</script'; ?>
>

<canvas id="graphSpace" width="400" height = "800"></canvas>

<?php }
}

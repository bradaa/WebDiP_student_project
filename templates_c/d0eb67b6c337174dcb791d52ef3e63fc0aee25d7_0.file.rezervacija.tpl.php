<?php
/* Smarty version 3.1.30, created on 2017-06-28 15:27:33
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\rezervacija.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5953aec5f05e99_29974873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0eb67b6c337174dcb791d52ef3e63fc0aee25d7' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\rezervacija.tpl',
      1 => 1498568917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5953aec5f05e99_29974873 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p id="username" style="display: none"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p>
<p id="service" style="display: none"><?php echo $_smarty_tpl->tpl_vars['ser']->value;?>
</p>
<p id="poruka"></p>
<input id="datum" name="datum" type="date"/>
<input style="margin-right: 40px; overflow: visible" id="vrijeme" name="vrijeme" type="time" step="60"/>
<p class="form_gumb">
<button id="rezerviraj" class="gumb_prijava" name="submit" value="submit" type="submit"><i id="ikona" class="material-icons">&#xE163;</i>  REZERVIRAJ</button>
</p>


<?php echo '<script'; ?>
 src="./js/userCheck.js"><?php echo '</script'; ?>
>
<?php }
}

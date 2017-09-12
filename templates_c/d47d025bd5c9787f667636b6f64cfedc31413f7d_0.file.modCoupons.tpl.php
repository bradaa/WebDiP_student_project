<?php
/* Smarty version 3.1.30, created on 2017-06-28 14:02:56
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\modCoupons.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59539af0dfd578_85248787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd47d025bd5c9787f667636b6f64cfedc31413f7d' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\modCoupons.tpl',
      1 => 1498651223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59539af0dfd578_85248787 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\libs\\plugins\\function.html_options.php';
?>
<section class="sekcija">
    <h6>.</h6>
    <div  class="reg_form" >
        <p id="poruka"></p>

        <p id="catToSer">
            <label > Kategorija: </label>
            <?php echo smarty_function_html_options(array('name'=>'modCoupon','options'=>$_smarty_tpl->tpl_vars['myOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>

        </p>
        <p>
            <label for="koris2" id="lab_koris"> Vrijednost: </label>
            <input id="koris2" name="koris2" type="number"/>
        </p>
        <p>
            <label for="datum" > Datum od: </label>
            <input id="datum" name="datum" type="date">
        </p>
        <p>
            <label for="vrijeme" > datum do: </label>
            <input id="vrijeme" name="vrijeme" type="date" />
        </p>
        <p class="form_gumb">
            <button class="gumb_prijava" id="modCoupon" ><i id="ikona" class="material-icons">&#xE163;</i>  POŠALJI</button>
        </p>
    </div>
</section>

<?php echo '<script'; ?>
 src="./js/userCheck.js"><?php echo '</script'; ?>
><?php }
}

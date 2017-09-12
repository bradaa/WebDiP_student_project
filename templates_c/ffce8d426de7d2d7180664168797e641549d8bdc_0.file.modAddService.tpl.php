<?php
/* Smarty version 3.1.30, created on 2017-06-28 13:00:17
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\modAddService.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59538c41891105_40345040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffce8d426de7d2d7180664168797e641549d8bdc' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\modAddService.tpl',
      1 => 1498647202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59538c41891105_40345040 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\libs\\plugins\\function.html_options.php';
?>
<section class="sekcija">
    <h6>.</h6>
    <div  class="reg_form" >
        <p id="poruka"></p>
        <p>
            <label for="koris2" id="lab_koris"> Naziv usluge: </label>
            <input id="koris2" name="koris2" type="text"/>
        </p>
        <p>
            <label for="opis_proizvoda" > Opis usluge: </label>
            <textarea rows="50" cols="100" id="opis_proizvoda" name="opis_proizvoda"></textarea>
        </p>
        <p>
            <label for="vrijeme" > Trajanje usluge: </label>
            <input id="vrijeme" name="vrijeme" type="time" value="00:00"/>
        </p>
        <p id="catToSer">
            <label > Kategorija: </label>
            <?php echo smarty_function_html_options(array('name'=>'modIzbor','options'=>$_smarty_tpl->tpl_vars['myOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>

        </p>

        <p class="form_gumb">
            <button class="gumb_prijava" id="modCoupons" ><i id="ikona" class="material-icons">&#xE163;</i>  POŠALJI</button>
        </p>
    </div>
</section>

<?php echo '<script'; ?>
 src="./js/userCheck.js"><?php echo '</script'; ?>
><?php }
}

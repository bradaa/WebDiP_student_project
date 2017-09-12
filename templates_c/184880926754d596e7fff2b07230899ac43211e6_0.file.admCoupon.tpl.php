<?php
/* Smarty version 3.1.30, created on 2017-06-30 20:48:47
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\admCoupon.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59569d0f915791_81592574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '184880926754d596e7fff2b07230899ac43211e6' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\admCoupon.tpl',
      1 => 1498848522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59569d0f915791_81592574 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\libs\\plugins\\function.html_options.php';
?>
<section class="sekcija">
    <h6>.</h6>
    <form  class="reg_form" >
        <p id="poruka"></p>

        <p id="catToSer">
            <label > Kategorija: </label>
            <?php echo smarty_function_html_options(array('name'=>'admCoupon','options'=>$_smarty_tpl->tpl_vars['myOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>

        </p>
        <p>
            <label for="koris2" id="lab_koris" > Naziv kupona: </label>
            <input id="koris2" name="koris2" type="text" placeholder="xx% Naziv"/>
        </p>
        <p>
            <label id="pdf" for="datum" > PDF </label>
            <input type="file" name="pdf" id="datum" accept="" class="inputfile">

            <label id="img" for="vrijeme" > Slika </label>
            <input type="file" id="vrijeme" name="img" accept="image/*" class="inputfile" >
        </p>
        <p class="form_gumb">
            <button class="gumb_prijava" id="admCoupon" ><i id="ikona" class="material-icons">&#xE163;</i>  POŠALJI</button>
        </p>
    </form>
</section>

<?php echo '<script'; ?>
 src="./js/admFileUpload.js"><?php echo '</script'; ?>
><?php }
}

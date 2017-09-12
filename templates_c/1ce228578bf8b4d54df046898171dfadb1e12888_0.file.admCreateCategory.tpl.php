<?php
/* Smarty version 3.1.30, created on 2017-06-28 16:29:46
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\admCreateCategory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5953bd5a686f22_26175945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ce228578bf8b4d54df046898171dfadb1e12888' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\admCreateCategory.tpl',
      1 => 1498560756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5953bd5a686f22_26175945 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\libs\\plugins\\function.html_options.php';
?>
<section class="sekcija">
    <h6>.</h6>
    <div  class="reg_form" >
        <p>
            <label for="koris2" id="lab_koris"> Naslov kategorije: </label>
            <input id="koris2" name="koris2" type="text"/>
        </p>
        <p>
            <label for="opis_proizvoda" > Opis kategorije: </label>
            <textarea rows="50" cols="100" id="opis_proizvoda" name="opis_proizvoda"></textarea>
        </p>
        <p id="catToSer">
            <label> Moderator:</label>
            <?php echo smarty_function_html_options(array('name'=>'modIzbor','options'=>$_smarty_tpl->tpl_vars['myOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);?>

        </p>

        <p class="form_gumb">
            <button class="gumb_prijava" id="catIzbor" ><i id="ikona" class="material-icons">&#xE163;</i>  POŠALJI</button>
        </p>
    </div>
</section>

<?php echo '<script'; ?>
 src="./js/userCheck.js"><?php echo '</script'; ?>
><?php }
}

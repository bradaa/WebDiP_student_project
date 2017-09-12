<?php
/* Smarty version 3.1.30, created on 2017-06-28 15:16:19
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\modCheckCoupon.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5953ac239e1ae3_78312622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30a6d1aca1a646333652c1d90f0887ba394f06bf' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\modCheckCoupon.tpl',
      1 => 1498655776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5953ac239e1ae3_78312622 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="sekcija">
    <h6>.</h6>
    <div  class="reg_form" >
        <p id="poruka"></p>

        <p>
            <label for="koris2" id="lab_koris"> Kupon kod: </label>
            <input id="koris2" name="koris2" type="text"/>
        </p>

        <p class="form_gumb">
            <button class="gumb_prijava" id="modCheckCoupon" ><i id="ikona" class="material-icons">&#xE163;</i>  POŠALJI</button>
        </p>
    </div>
</section>

<?php echo '<script'; ?>
 src="./js/userCheck.js"><?php echo '</script'; ?>
><?php }
}

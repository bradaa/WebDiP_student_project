<?php
/* Smarty version 3.1.30, created on 2017-06-16 11:44:08
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\prijava.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5943a8687ee2c3_71179833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8279f430129a4bebed66231599171b54f4ce8c48' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\prijava.tpl',
      1 => 1497605429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5943a8687ee2c3_71179833 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="sekcija">
    <h6>.</h6>
    <form  class="reg_form" action="./prijava.php" method="post">
        <div id="twoStep" style="display: <?php echo $_smarty_tpl->tpl_vars['nesto']->value;?>
">
            <a style="text-decoration: none; margin-top: 200px;" id="twoStepInput" class="material-icons" data-fancybox data-type="iframe" href="./twoStep.php">lock_open</a>
        </div>

        <p>
            <label for="koris" id="lab_koris"> Korisničko ime: </label>
            <input id="koris" name="koris" type="text" placeholder="marija" value="<?php echo $_smarty_tpl->tpl_vars['cookie_user']->value;?>
"/>
        </p>
        <p>
            <label for="lozinka_p" id="lab_loznika_p"> Lozinka: </label>
            <input id="lozinka_p" name="lozinka" type="password" placeholder="MIrko69" />
        </p>
        <p>
            <label for="rad" id="lab_rad"> Zapamti me </label>
            <label for="rad" id="labela_radio" > Da  </label>
            <input id="rad" name="rad" type="radio" value="Da"/>
            <label for="rada" id="nelabela_radio" > Ne  </label>
            <input id="rada" name="rad" type="radio" value="Ne" checked/>
        </p>
        <p>
            <a href="./lostPass.php">Zaboravljena lozinka?</a>
        </p>
        <p class="form_gumb">
            <button class="gumb_prijava" name="submit" value="submit" type="submit"><i id="ikona" class="material-icons">&#xE163;</i>  PRIJAVA</button>
        </p>
    </form>
</section>


<?php }
}

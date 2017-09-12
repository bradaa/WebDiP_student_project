<?php
/* Smarty version 3.1.30, created on 2017-06-09 22:12:32
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\registracija.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593b01306c49d4_98066180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '219fc80386d60080ce02f2b8d357eb7fc7933aa2' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\registracija.tpl',
      1 => 1497039121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593b01306c49d4_98066180 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="sekcija">
    <h6>.</h6>
    <form  class="reg_form" action="registracija.php" method="post">
        <p>
            <label for="ime" > Ime: </label>
            <input id="ime" name="ime" type="text" placeholder="Ime"/>
        </p>
        <p id="error7" class="error" style="display: <?php echo $_smarty_tpl->tpl_vars['imeErr']->value;?>
" >Ime krivo!</p>
        <p>
            <label for="prezime" > Prezime: </label>
            <input id="prezime" name="prezime" type="text" placeholder="Prezime" />
        </p>
        <p id="error8" class="error" style="display: <?php echo $_smarty_tpl->tpl_vars['preErr']->value;?>
" >Prezime krivo!</p>
        <p>
            <label for="koris" > Korisničko ime: </label>
            <input id="koris" name="koris" type="text" placeholder="Korisničko ime" />
        </p>
        <p id="error9" class="error" style="display: <?php echo $_smarty_tpl->tpl_vars['korErr']->value;?>
" >Korisničko ime postoji</p>
        <p>
            <label for="email" > Email: </label>
            <input id="email" name="email" type="email" placeholder="Email" />
        </p>
        <p id="error10" class="error" style="display: <?php echo $_smarty_tpl->tpl_vars['emaErr']->value;?>
" >Unesite validan email ili već postoji!</p>
        <p>
            <label for="lozinka" > Lozinka: </label>
            <input id="lozinka" name="lozinka" type="password" placeholder="Lozinka" />
        </p>
        <p id="error11" class="error" style="display: <?php echo $_smarty_tpl->tpl_vars['lozErr']->value;?>
" >Lozinka nije ispravna!</p>
        <p>
            <label for="lozinka_p" > Potvrda loznike </label>
            <input id="lozinka_p" name="lozinka_p" type="password" placeholder="Potvrda lozinke" />
        </p>
        <p id="error12" class="error" style="display: <?php echo $_smarty_tpl->tpl_vars['lozpErr']->value;?>
" >Lozinka ne odgovara!</p>

        <p>
            <label for="twoStep" > Two-step: </label>
            <input id="twoStep" name="twoStep" type="checkbox" value="1"/>
        </p>

        <div class="g-recaptcha" data-sitekey="6LdTsx8UAAAAAA1_49Pyu17piNMf9Uio1r0_2az8"></div>

        <p id="error13" class="error" style="display: <?php echo $_smarty_tpl->tpl_vars['capErr']->value;?>
" >Označite captcha!</p>

        <p class="form_gumb">
            <button id="submit" class="gumb_prijava" name="registracija" value="registracija" type="submit"><i id="ikona" class="material-icons">&#xE163;</i>  REGISTRACIJA</button>
        </p>
        <p id="link" class="error" style="display: <?php echo $_smarty_tpl->tpl_vars['linErr']->value;?>
" ></p>
    </form>
</section><?php }
}

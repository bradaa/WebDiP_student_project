<?php
/* Smarty version 3.1.30, created on 2017-06-28 16:00:39
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\navUsr.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5953b68700d479_86967112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffe8b441e459eac66775cf9f8fd86dafe08421c1' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\navUsr.tpl',
      1 => 1498658436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5953b68700d479_86967112 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="nav">
    <ul>
        <li id="nav0"class="aktivni"><strong><a href="./index.php" > <i id="nav1" class="material-icons">home</i>Početna</a></strong></li>
        <li id="nav1"><a href="usrCoupons.php"> <i id="nav2" class="material-icons">credit_card</i>Kuponi</a></li>

    </ul>
    <p  style="position: absolute; bottom: 5px; left: 10px;  color: white">Broj bodova:</p>

    <p id="points" style="position: absolute; bottom: 5px; left: 115px;  color: white"></p>
</nav>
<?php }
}

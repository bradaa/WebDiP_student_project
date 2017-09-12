<?php
/* Smarty version 3.1.30, created on 2017-06-28 17:03:59
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\navAdm.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5953c55fd956a0_75228566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82492b5d251f1ee6440cc4333e28d1d7e12ba613' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\navAdm.tpl',
      1 => 1498660600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5953c55fd956a0_75228566 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="nav">
    <ul>
        <li id="nav0"class="aktivni"><strong><a href="./index_signed.php" > <i id="nav1"  class="material-icons">home</i>Početna</a></strong></li>
        <li id="nav1"><a href="./admCreateCategory.php"> <i id="nav2"  class="material-icons">add_shopping_cart</i>Kategorija</a></li>
        <li id="nav2"><a href="./admCRUD.php"> <i id="nav3"   class="material-icons">view_list</i>CRUD</a></li>
        <li id="nav3"><a href="./admStatistic.php"> <i id="nav4"   class="material-icons">group</i>Stat</a></li>
        <li id="nav4"><a href="./admUserLock.php"> <i id="nav5" class="material-icons">lock</i>Zaklj kor.</a></li>
        <li id="nav5"><a href="./admLog.php"> <i id="nav6" class="material-icons">group_add</i>Log</a></li>
        <li id="nav6"><a href="./admCoupon.php"> <i id="nav7" class="material-icons">credit_card</i>Kuponi</a></li>
    </ul>
</nav>
<?php }
}

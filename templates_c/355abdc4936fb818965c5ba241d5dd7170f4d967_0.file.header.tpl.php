<?php
/* Smarty version 3.1.30, created on 2017-06-27 17:04:57
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595274196fbc79_36489241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '355abdc4936fb818965c5ba241d5dd7170f4d967' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\header.tpl',
      1 => 1498572990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595274196fbc79_36489241 (Smarty_Internal_Template $_smarty_tpl) {
?>
<HTML>

<!DOCTYPE html>

<html lang="hr">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta charset="UTF-8">
    <meta name="title" content="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
    <meta name="keywords" content="WebDiP,html,css,prva_vjezba">
    <meta name="author" content="Matija Ljescanin">
    <meta name="date" content="07/03/2017">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url"           content="http://barka.foi.hr/WebDiP/2016_projekti/WebDiP2016x068/index.php" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
    <meta property="og:description"   content="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 "/>
    <meta property="og:image"         content="http://barka.foi.hr/WebDiP/2016_projekti/WebDiP2016x068/img/logo.jpg" />
    <link rel="stylesheet" type="text/css" href="./css/matljesca.css">
    <link rel="icon" type="img/ico" href="./img/fav.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"><?php echo '</script'; ?>
>

</head>
<body>

<header class="header">
    <a href="./prijava.php">

    <figure id="leti" >
        <img id="leti1" src="./img/material.png"  alt="logo" >
        <figcaption></figcaption>

    </figure>
    </a>

    <button style="display: <?php echo $_smarty_tpl->tpl_vars['gumb']->value;?>
;" id="menu_button" ><i id="menu_button1" class="material-icons">menu</i></button>

    <h1 style="display: none;"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <form action="./logout.php" method="post" style="display: <?php echo $_smarty_tpl->tpl_vars['gumb']->value;?>
; position: absolute; top: 2px; right: 0; point">
        <div id="profilePic"><p><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</p></div>
    <button style=" cursor: pointer; " id="logout" ><i id="logoutI" class="material-icons" >exit_to_app</i></button>
    </form>

</header>
<div class="notifications-wrapper">

</div>
<?php }
}

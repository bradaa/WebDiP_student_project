<HTML>

<!DOCTYPE html>

<html lang="hr">
<head>
    <title>{$title}</title>
    <meta charset="UTF-8">
    <meta name="title" content="{$title}">
    <meta name="keywords" content="WebDiP,html,css,prva_vjezba">
    <meta name="author" content="Matija Ljescanin">
    <meta name="date" content="07/03/2017">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url"           content="http://barka.foi.hr/WebDiP/2016_projekti/WebDiP2016x068/index.php" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{$title}" />
    <meta property="og:description"   content="{$title} "/>
    <meta property="og:image"         content="http://barka.foi.hr/WebDiP/2016_projekti/WebDiP2016x068/img/logo.jpg" />
    <link rel="stylesheet" type="text/css" href="./css/matljesca.css">
    <link rel="icon" type="img/ico" href="./img/fav.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>

</head>
<body>

<header class="header">
    <a href="./prijava.php">

    <figure id="leti" >
        <img id="leti1" src="./img/material.png"  alt="logo" >
        <figcaption></figcaption>

    </figure>
    </a>

    <button style="display: {$gumb};" id="menu_button" ><i id="menu_button1" class="material-icons">menu</i></button>

    <h1 style="display: none;">{$title}</h1>
    <form action="./logout.php" method="post" style="display: {$gumb}; position: absolute; top: 2px; right: 0; point">
        <div id="profilePic"><p>{$user}</p></div>
    <button style=" cursor: pointer; " id="logout" ><i id="logoutI" class="material-icons" >exit_to_app</i></button>
    </form>

</header>
<div class="notifications-wrapper">

</div>

<?php

    include_once("helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    
</head>
<body>
    <header>
        <a href="<?= $BASE_URL; ?>" id="logo">
            <img src="<?= $BASE_URL; ?>/img/logo.svg" alt="Blog Codar">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL; ?>" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL; ?>contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
        <div id="btns-legibilidade">
            <button id="btn-aumentar" class="btns"><i class="fas fa-plus"></i></button>
            <button id="btn-diminuir" class="btns"><i class="fas fa-minus"></i></button>
        </div>
    </header>
    <div vw class="enabled">
      <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
      </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <meta name="google" value="notranslate">
    <!--    <script src="https://kit.fontawesome.com/9a391d7800.js" crossorigin="anonymous"></script>
    -->    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/index.css">
    <?php
    if (isset($var['css'])){
        $css = $var['css'];
    }
    else{
        $css = 'style';
    }
    ?>
    <link rel="stylesheet" href="/assets/css/<?= $css ?>.css">

</head>
<body>

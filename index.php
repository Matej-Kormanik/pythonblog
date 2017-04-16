<?php
session_start();
require "komponenty/priprav-obsah.php";
?>
<!DOCTYPE html>
<html lang="cz">
<head>
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="komponenty/obrazky/ikodf2.ico" />      <!--  ikonka  -->
    <meta name="robots" content="index,follow" />
    <meta name="description" content="<?php echo $metapopis; ?>" />
    <meta name="keywords" content="<?php echo $klicovaslova; ?>" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="komponenty/css/indexCSS.css" />
    <link rel="stylesheet" type="text/css" href="komponenty/css/pythonJazyk.css">
    <link rel="stylesheet" type="text/css" href="komponenty/css/ostranke.css">
    <link rel="stylesheet" type="text/css" href="komponenty/css/priklady.css">
    <link rel="stylesheet" type="text/css" href="komponenty/css/dreamweaver.css">
</head>
<body>
<div id="obal">
    <?php
        require "komponenty/hlavicka.php";
        require "komponenty/menu_vodorovne.php";
    ?>
    <div id="hlavne">
        <div id="obsah">
            <div id="obsahOkraj">
            <?php
                $page = htmlspecialchars(strip_tags($_GET['page']));
                if($page == ''){
                    $page = 'titulka';
                }
                if(file_exists('stranky/'.$page.'.php')){
                    require 'stranky/'.$page.'.php';
                }elseif(file_exists('komponenty/'.$page.'.php')){
                    require 'komponenty/'.$page.'.php';}
                else {
                    require "stranky/error404.php";
                }
            ?>
            </div>
        </div>
        <?php require "komponenty/menu_zvisle.php"; ?>
    </div>
    <?php require "komponenty/paticka.php"; ?>
</div>
<script src="komponenty/js/rainbow.min.js"></script>
<script src="komponenty/js/generic.js"></script>
<script src="komponenty/js/python.js"></script>
<!-- <script src="komponenty/js/anchorstyler.js"></script> -->
</body>
</html>
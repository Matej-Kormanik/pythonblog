<?php
require "stranky/dbPripoj.php";

$page = htmlspecialchars(strip_tags($_GET['page']));
if($page=="") {
    $page="index";};

$vysledok = mysqli_query($db,'SELECT * FROM texty WHERE urlnazev="'.$page.'"');
$zaznam = mysqli_fetch_array($vysledok);

if($zaznam['nazev']!="") {
    $nazev=$zaznam['nazev'];
    $text=$zaznam['text'];
    $klicovaslova=$zaznam['klicovaslova'];
    $title=$zaznam['nazev'].' | python-blog.cz';
    $metapopis=$zaznam['metapopis'];
};
?>
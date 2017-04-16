<h2>Selection sort</h2>

<p>Řazení výběrem (anglicky selection sort) je implementačně jednoduchý řadicí algoritmus s časovou složitostí O(N²). Pro svou jednoduchou implementaci a nízký overhead bývá často používán pro uspořádávání malých množství dat.</p>
<p style="margin-bottom: 0"><strong>Princíp</strong></p>

<ol id="olpr8" style="padding-left: 25px">
    <li>Rozdělíme si posloupnost na seřazenou a neseřazenou část</li>
    <li>Najdeme prvek s nejmenší hodnotou v neseřazené části posloupnosti</li>
    <li>Zaměníme ho s prvkem na první pozici neseřazené části</li>
    <li>První prvek neseřazené části zahrneme do seřazené části a zároveň neseřazenou část zmenšíme o 1 prvek zleva</li>
    <li>Zbytek posloupnosti se uspořádá opakováním kroků 2 až 5 pro zbylou neseřazenou část</li>
</ol>


<p>
    <a href="index.php?page=sortselect&lang=python"> <img src="komponenty/obrazky/pythontransparent.png" alt="python logo" class="logoLang" /></a>
    <a href="index.php?page=sortselect&lang=java"> <img src="komponenty/obrazky/javatransparent.png" alt="java logo" class="logoLang" /></a>
    <a href="index.php?page=sortselect&lang=c"> <img src="komponenty/obrazky/ctransparent.png" alt="c language logo" class="logoLang" /></a>
</p>

<!--==============================================================-->
<?php
$lang = htmlspecialchars($_GET['lang']);
if($lang==""){$lang="python";};
require 'stranky/'.$lang.'/kod_sortselect.php';
?>

<!--==============================================================-->
<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>
<h2>Insertion sort</h2>

<p>Řazení vkládáním (insertion sort) je jednoduchý řadicí algoritmus založený na porovnávání. Algoritmus Insertion Sort pracuje tak, že prochází prvky postupně a každý další nesetříděný prvek zařadí na správné místo do již setříděné posloupnosti. Je to jeden z nejrychlejších algoritmů s kvadratickou časovou složitostí. Je asymptoticky pomalejší než pokročilé algoritmy jako třeba quicksort nebo mergesort, ale má jiné výhody.</p>
<img src="komponenty/obrazky/insertsort.gif">


<p>
    <a href="index.php?page=sortinsert&lang=python"> <img src="komponenty/obrazky/pythontransparent.png" alt="python logo" class="logoLang" /></a>
    <a href="index.php?page=sortinsert&lang=java"> <img src="komponenty/obrazky/javatransparent.png" alt="java logo" class="logoLang" /></a>
    <a href="index.php?page=sortinsert&lang=c"> <img src="komponenty/obrazky/ctransparent.png" alt="c language logo" class="logoLang" /></a>
</p>

<!--==============================================================-->
<?php
$lang = htmlspecialchars($_GET['lang']);
if($lang==""){$lang="python";};
require 'stranky/'.$lang.'/kod_sortinsert.php';
?>
<!--==============================================================-->


<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>
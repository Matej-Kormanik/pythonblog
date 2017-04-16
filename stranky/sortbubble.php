<h2>Bubble sort</h2>

<p>Bublinkové řazení (bubble sort) je implementačně jednoduchý řadicí algoritmus. Algoritmus opakovaně prochází seznam, přičemž porovnává každé dva sousedící prvky, a pokud nejsou ve správném pořadí, prohodí je.</p>
<p style="margin-top: 0">Algoritmus je univerzální (pracuje na základě porovnávání dvojic prvků), pracuje lokálně (nevyžaduje pomocnou paměť), je stabilní (prvkům se stejným klíčem nemění vzájemnou polohu). Název vyjadřuje průběh zpracování, při kterém prvky s vyšší hodnotou „probublávají“ na konec seznamu.</p>
<img src="komponenty/obrazky/bubblesort.gif">


<p>
    <a href="index.php?page=sortbubble&lang=python"> <img src="komponenty/obrazky/pythontransparent.png" alt="python logo" class="logoLang" /></a>
    <a href="index.php?page=sortbubble&lang=java"> <img src="komponenty/obrazky/javatransparent.png" alt="java logo" class="logoLang" /></a>
    <a href="index.php?page=sortbubble&lang=c"> <img src="komponenty/obrazky/ctransparent.png" alt="c language logo" class="logoLang" /></a>
</p>


<!--==============================================================-->
<?php
$lang = htmlspecialchars($_GET['lang']);
if($lang==""){$lang="python";};
require 'stranky/'.$lang.'/kod_sortbubble.php';
?>
<!--==============================================================-->

<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>
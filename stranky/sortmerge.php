<h2>Merge sort</h2>
<p>Merge sort je řadicí algoritmus, jehož průměrná i nejhorší možná časová složitost je (O(N log N)). Algoritmus je velmi dobrým příkladem programátorské metody rozděl a panuj.</p>
<p style="margin-bottom: 0"><strong>Princíp</strong></p>

<ol id="olpr8">
    <li>Rozdělí neseřazenou množinu dat na dvě podmnožiny o přibližně stejné velikosti</li>
    <li>Seřadí obě podmnožiny</li>
    <li>Spojí seřazené podmnožiny do jedné seřazené množiny</li>
</ol>



<p>
    <a href="index.php?page=sortmerge&lang=python"> <img src="komponenty/obrazky/pythontransparent.png" alt="python logo" class="logoLang" /></a>
    <a href="index.php?page=sortmerge&lang=java"> <img src="komponenty/obrazky/javatransparent.png" alt="java logo" class="logoLang" /></a>
    <a href="index.php?page=sortmerge&lang=c"> <img src="komponenty/obrazky/ctransparent.png" alt="c language logo" class="logoLang" /></a>
</p>


<!--==============================================================-->
<?php
$lang = htmlspecialchars($_GET['lang']);
if($lang==""){$lang="python";};
require 'stranky/'.$lang.'/kod_sortmerge.php';
?>
<!--==============================================================-->

<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>
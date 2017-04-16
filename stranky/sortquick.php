<h2>Quick sort</h2>
<p>Řazení pomocí rozdělování a slučování. Rozděluje seznam na základě pivota x. Nalevo od prvku x umístíme všechny prvky menší než x. Napravo od prvku x umístíme všechny prvky větší než x. Rozdělení se opakuje pro seznam nalevo a napravo od x. Postup opakujeme dokud nerozdělujeme jednoprvkové úseky. Nestabilní. Rekurzivní algoritmus – výsledek vzniká pomocí volání
    stejného algoritmu na menší části. Výběr pivota – ovlivňuje výkonost řazení</p>


<p>
    <a href="index.php?page=sortquick&lang=python"> <img src="komponenty/obrazky/pythontransparent.png" alt="python logo" class="logoLang" /></a>
    <a href="index.php?page=sortquick&lang=java"> <img src="komponenty/obrazky/javatransparent.png" alt="java logo" class="logoLang" /></a>
    <a href="index.php?page=sortquick&lang=c"> <img src="komponenty/obrazky/ctransparent.png" alt="c language logo" class="logoLang" /></a>
</p>


<!--==============================================================-->
<?php
$lang = htmlspecialchars($_GET['lang']);
if($lang==""){$lang="python";};
require 'stranky/'.$lang.'/kod_sortquick.php';
?>
<!--==============================================================-->








<!--==============================================================-->
<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>
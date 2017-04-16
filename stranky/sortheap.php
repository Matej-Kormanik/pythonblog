<h2>Heap sort</h2>
<p>Řazení pomocí převodu na binární haldu (Binární strom, kde každý prvek je větší než jeho následovníci, Každý prvek je co nejvíce vlevo). Implementujeme pomocí pole, kde potomci prvku n jsou na pozici 2n+1 a 2n+2. Vyjímáním max. elementu budujeme setříděný seznam. Pokud není halda prázdná, zaměníme první a poslední prvek. Nestabilní.</p>


<p>
  <a href="index.php?page=sortheap&lang=python"> <img src="komponenty/obrazky/pythontransparent.png" alt="python logo" class="logoLang" /></a>
  <a href="index.php?page=sortheap&lang=java"> <img src="komponenty/obrazky/javatransparent.png" alt="java logo" class="logoLang" /></a>
  <a href="index.php?page=sortheap&lang=c"> <img src="komponenty/obrazky/ctransparent.png" alt="c language logo" class="logoLang" /></a>
</p>


<!--==============================================================-->
<?php
$lang = htmlspecialchars($_GET['lang']);
if($lang==""){$lang="python";};
require 'stranky/'.$lang.'/kod_sortheap.php';
?>
<!--==============================================================-->

<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>
<h2>príklad 3 - faktoriál</h2>
<p>V matematice je faktoriál čísla n (značeno pomocí vykřičníku: n!) číslo, rovné součinu všech kladných celých čísel menších nebo rovných n, pokud je n kladné a 1 pokud n = 0. Značení n! vyslovujeme jako „n faktoriál“.</p>

<p class="definice1">Faktoriál je formálně definován takto:</p>
<img class="obrPr1" src="komponenty/obrazky/pr3fakt1.png" >

<div id="kod">
    <pre data-language="python">
        def faktorial(n):
            fakt = 1
            while(n > 1):
                fakt *= n
                n -= 1
            return fakt

        print(faktorial(5))
    </pre>
</div>
<p class="vypis">Vypíše: 120</p>

<!--==============================================================-->
<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>
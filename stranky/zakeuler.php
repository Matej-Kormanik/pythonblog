<h2>príklad 4 - eurelovo číslo</h2>
<p>Eulerovo číslo též označované jako základ přirozených logaritmů, značeno písmenem <strong>e</strong>, je jedna ze základních matematických konstant. Jeho přibližná hodnota je <strong>2,718</strong></p>

<p class="definice1">Eulerovo číslo jako součet následující nekonečné řady.</p>
<img class="obrPr1" src="komponenty/obrazky/pr4euler1.png">

<div id="kod">
    <pre data-language="python">
        def euler(n):
            e = 1
            fakt = 1
            for i in range(2,n+1):
                e = e + (1 / fakt)
                fakt = fakt * i
            return e

        print(euler(100))

    </pre>
</div>
<p class="vypis">Vypíše: 2.718281</p>

<!--==============================================================-->
<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>
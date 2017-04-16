<h2>príklad 1  - Největší spoločný delitel</h2>
<p>Největší společný dělitel (značený NSD, D, příp. gcd z anglického greatest common divisor) dvou celých čísel je největší číslo takové, že beze zbytku dělí obě čísla, tzn. největší číslo, jímž jsou obě čísla dělitelná. Například největší společný dělitel čísel 15 a 20 je 5 (číslo 5 dělí obě čísla, žádné větší číslo s touto vlastností už neexistuje; např. číslo 10 dělí druhé číslo, ale ne první).</p>

<p class="definice1">definice : </p>
<img src="komponenty/obrazky/nsd_definice.png" class="obrPr1">

<div id="kod">
    <pre> <code data-language="python">
        def maxSpolDel(a,b):
            if(a < b):
                D = a
            else:
                D = b
            while(a % D != 0 or b % D != 0):
                D -= 1
            return D

            print(maxSpolDel(20,15))
            </code>
    </pre>
</div>

<p class="vypis">vypíše : 5</p>

<!--==============================================================-->
<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>





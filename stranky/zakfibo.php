<h2>príklad 2 - Fibonacciho posloupnost</h2>
<p>Jako Fibonacciho posloupnost je v matematice označována nekonečná posloupnost přirozených čísel, začínající 0, 1, 1, 2, 3, 5, 8, 13, 21, … (čísla nacházející se ve Fibonacciho posloupnosti jsou někdy nazývána Fibonacciho čísla), kde každé číslo je součtem dvou předchozích.</p>
<div id="kod">
    <pre data-language="python">
         def fibonacci(n):
            fiboRada = n * [1]
            for i in range(2,len(fiboRada),1):
                fiboRada[i] = fiboRada[i-2] + fiboRada[i-1]

            return fiboRada

         print(fibonacci(6))
     </pre>
</div>
<p class="vypis">Vypíše : [1, 1, 2, 3, 5, 8]</p>



<!--==============================================================-->
<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>

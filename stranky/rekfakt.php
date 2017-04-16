<h2>Faktoriál čísla rekurzivne</h2>


<div id="kod">
    <pre data-language="python">
    def faktorial(n):
        if n <= 1: return 1
        else:      return n * faktorial(n-1)

    print(faktorial(5))
    </pre>
</div>
<p class="vypis">Vypíše: 120</p>



<!--==============================================================-->
<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>
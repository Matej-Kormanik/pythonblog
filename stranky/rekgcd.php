<h2>Největší společný dělitel rekurzivne</h2>

<div id="kod">
    <pre data-language="python">
    def gcd(a,b):
        if b==0: return a
        else:    return gcd(b,a%b)

    print(gcd(15,6))
    </pre>
</div>
<p class="vypis">Vypíše: 3</p>


<!--==============================================================-->
<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>
<h2>príklad 5 - maximálne a minimílne číslo v poli</h2>
<p>Napíš dve funkce s názvem maximalneCislo a minimalneCislo, které budú prijmat ako parameter pole(array) s číselnými hodnotami. Funkce maximalneCislo najde a vráti  nejvetší císlo v poli. Funkce minimalneCislo najde a vrati nejmenší číslo v poli.</p>
<div id="kod">
    <pre data-language="python">
        def maximalneCislo(pole):
            maxim = pole[0]
            for i in range(1,len(pole)):
                if(pole[i] > maxim):
                maxim = pole[i]
            return maxim

        def minimalneCislo(pole):
            minimalne = pole[0]
            for j in range(1,len(pole)):
                if(pole[j]< minimalne):
                minimalne = pole[j]
            return minimalne


        mojePole = [1,8,4,0,3,2,2,9,5,7,3,9,4,6,10,84,-9,0]
        print(mojePole)
        print("najvacsie cislo : ",maximalneCislo(mojePole))
        print("najmensie cislo : ",minimalneCislo(mojePole))
    </pre>
</div>
<p class="vypis">Vypíše: [1,8,4,0,3,2,2,9,5,7,3,9,4,6,10,84,-9,0]</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;najvacsie cislo :  84 </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;najmensie cislo :  -9
</p>

<!--==============================================================-->
<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>
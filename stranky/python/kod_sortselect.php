<div id="kod">
    <pre data-language="python">
 1| def selectionSort(pole):
 2|     for i in range(0,len(pole)):
 3|         least = i
 4|         for k in range(i+1,len(pole)):
 5|             if(pole[k] < pole[least]): least = k
 6|         pole[i],pole[least] = pole[least],pole[i]
 7|     return pole
 8|
 9| print(selectionSort([9,2,4,0,3,8,6,1,7,5]))
    </pre>
</div>
<p class="vypis">Vypíše: [0,1,2,3,4,5,6,7,8,9]</p>
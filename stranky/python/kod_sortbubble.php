<div id="kod">
    <pre data-language="python">
 1| def bubbleSort(pole):
 2|     for last in range(len(pole)-1,0,-1):
 3|         for i in range(0,last):
 4|             if(pole[i]>pole[i+1]):
 5|                 pole[i],pole[i+1] = pole[i+1],pole[i]
 6|     return pole
 7|
 8| print(bubbleSort([9,2,4,0,3,8,6,1,7,5]))
    </pre>
</div>
<p class="vypis">Vypíše: [0,1,2,3,4,5,6,7,8,9]</p>
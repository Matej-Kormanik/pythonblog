<div id="kod">
    <pre data-language="python">
 1| def selectSort(pole):
 2|     for i in range(0,len(pole)):
 3|         currentValue = pole[i]
 4|         position = i
 5|         while(position > 0 and pole[position-1] > currentValue):
 6|             pole[position] = pole[position-1]
 7|             position = position -1
 8|         pole[position] = currentValue
 9|
10|     return pole
11|
12| print(selectSort([9,2,4,0,3,8,6,1,7,5]))
    </pre>
</div>
<p class="vypis">Vypíše: [0,1,2,3,4,5,6,7,8,9]</p>

<!--
 1|
 2|
 3|
 4|
 5|
 6|
 7|
 8|
 9|
10|
11|
12|
13|
14|
15|
-->
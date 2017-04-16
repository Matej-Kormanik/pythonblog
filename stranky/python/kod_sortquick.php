<div id="kod">
    <pre data-language="python">
01|    def quickSort(array):
02|        if len(array) <= 1:
03|            return array
04|        else:
05|            left, right, center, pivot = [], [], [], array[0]
06|            for item in array:
07|                if item < pivot:
08|                    left.append(item)
09|                elif item > pivot:
10|                    right.append(item)
11|                else:
12|                    center.append(item)
13|        return quickSort(left) + center + quickSort(right)
14|
15|    print(quickSort([9,2,4,0,3,8,6,1,7,5]))
    </pre>
</div>
<p class="vypis">Vypíše: [0,1,2,3,4,5,6,7,8,9]</p>
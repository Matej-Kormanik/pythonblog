<div id="kod">
    <pre data-language="python">
 1|def heapSort(array):
 2| for start in range((len(array)-2)//2, -1, -1):
 3|   movedown(array, start, len(array)-1)
 4|
 5| for end in range(len(array)-1, 0, -1):
 6|   array[end], array[0] = array[0], array[end]
 7|   movedown(array, 0, end - 1)
 8|
 9|def movedown(array, start, end):
10|  root = start
11|  while True:
12|    child = root * 2 + 1
13|    if child > end: break
14|    if child + 1 <= end and array[child] < array[child + 1]:
15|      child += 1
16|    if array[root] < array[child]:
17|      array[root], array[child] = array[child], array[root]
18|      root = child
19|    else:
20|      break
21|
22|arrayToSort = [9,2,4,0,3,8,6,1,7,5]
23|heapSort(arrayToSort)
24|print(arrayToSort)
    </pre>
</div>
<p class="vypis">Vypíše: [0,1,2,3,4,5,6,7,8,9]</p>
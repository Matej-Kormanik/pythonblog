<div id="kod">
    <pre data-language="python">
 1| def mergeSort(array):
 2|     if len(array) < 2:
 3|         return array
 4|     m = len(array) // 2
 5|     return merge(mergeSort(array[:m]), mergeSort(array[m:]))
 6|
 7| def merge(leftPart, rightPart):
 8|     result = []
 9|     i = j = 0
10|     while i < len(leftPart) and j < len(rightPart):
11|         if leftPart[i] < rightPart[j]:
12|             result.append(leftPart[i])
13|             i += 1
14|         else:
15|             result.append(rightPart[j])
16|             j += 1
17|     result += leftPart[i:]
18|     result += rightPart[j:]
19|     return result
20|
21|
22| arrayToSort = [9,2,4,0,3,8,6,1,7,5]
23| print(mergeSort(arrayToSort))
    </pre>
</div>
<p class="vypis">Vypíše: [0,1,2,3,4,5,6,7,8,9]</p>
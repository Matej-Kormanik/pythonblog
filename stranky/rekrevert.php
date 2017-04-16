<h2>Prevráť prvky v poli (rekurzivne)</h2>

<div id="kod">
    <pre data-language="python">
    def arrayRevert(array):
        if len(array)<=1: return array
        else:
            head = [array.pop(0)]
            tail = array
            ret =  arrayRevert(tail)+head
            return ret

    print(arrayRevert([1,2,3,4,5,6]))
    </pre>
</div>
<p class="vypis">Vypíše: [6,5,4,3,2,1]</p>



<!--==============================================================-->
<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>
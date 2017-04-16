<h2>Hanoiské věže</h2>
<p></p>

<div id="kod">
    <pre data-language="python">
    def moveTower(n, tFrom, tTo, tmp):
        if n > 0:
            moveTower(n-1, tFrom, tmp, tTo) #move to tmp
            print("Moving disk from",tFrom,"to",tTo)
            moveTower(n-1, tmp, tTo, tFrom) #move from tmp

    discs = 2
    moveTower( discs, 1, 2, 3)
    </pre>
</div>
<p class="vypis">Vypíše:<br /> Moving disk from 1 to 3<br />
                         Moving disk from 1 to 2<br />
                         Moving disk from 3 to 2</p>



<!--==============================================================-->
<h2 class="komentiky">Komentáre</h2>

<?php
require "komponenty/zkomentare.php";
?>
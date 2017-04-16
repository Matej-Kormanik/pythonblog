<?php
session_start();
?>
<div id="zahlavie">

    <div id="zahlavieL">
        <a href="index.php"> <img src="komponenty/obrazky/pythonlogo2.png" height="120px" style="margin-top: 5px;"></a>
    </div>

    <div id="zahlavieP">
        <div id="zahlavieP-okraj">

            <?php

            if($_SESSION['prihlasenyUser']==""){
                echo "<div class= user>";
                echo '<a href="index.php?page=zprihlasenie">přihlášení</a>';
                echo "</div>";
                echo "<div class= user>";
                echo '<a href="index.php?page=zregistracia">registrace</a>';
                echo "</div>";

            }else{
                echo "<div class= user>";
                echo "''".$_SESSION['prihlasenyUser']."''";
                echo "</div>";
                echo "<div class= user>";
                echo '<a href="komponenty/odhlasenie.php">odhlášení</a>';
                echo "</div>";
            }

            ?>
        </div>
    </div>

</div>
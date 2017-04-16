/**
 * Created by matejkormanik on 2/15/16.
 */

var odkaz = document.getElementById("odkaz");
odkaz.addEventListener("click",zvyrazni);
function zvyrazni(e){
    odkaz.style.color="red";
    odkaz.style.backgroundColor="darkgray";
}
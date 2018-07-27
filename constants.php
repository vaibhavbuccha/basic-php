<?php
#To create a constant, use the define() function.
#via define we can write case-sensitive words.
define ("VAIBHAV","VaIbHaV");
echo VAIBHAV;
echo "<br>";

#constants are global.
define("HELLO","VaIbHaV");
function a(){
    echo HELLO;
}
a();
?>
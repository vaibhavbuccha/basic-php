<?php
# 1st program for checking scope of variables.
/*
$x = 5; //variable with global scope.
 
function f() {
    #checking scope inside the function. 
    echo "<p> variable x  inside the function is: $x</p>";
    echo "<br>";
}
f();
#checking scope out side the function.
echo "<p> variable x out side the function is: $x </p>";

*/
# 2nd program for checking scope of variables.
/*
$x = 5;
$y = 10;

echo "the value of x is:$x";
echo "<br>";
echo "the value of y is:$y";
echo "<br>";
function f(){
    #global keyword is used for making variable global.
    global $x , $y ;
    $y = $x + $y;
}
f();
echo "the sum of x and y is: $y ";
*/

//this is the example of static variable.

function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();

?>

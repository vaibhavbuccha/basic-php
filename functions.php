<?php
//creat a function.
function a(){
    echo "this is the normal function.";
}
//call this function.
//a();



function b(){
    $x = 5;
    $y = 10;
    $z =$x+$y;
    echo "the sum of 5 and 10 is:".$z."<br>";
}
#calling this function.
//b();

//passing parameter
function c($para){
    $x =199;
    $y =999;
    $z = $x+$y;
    echo $para*$z ."<br>";
}
#calling this function.
c(20);

#after declaration of function we can call that functon at anywhere in the program.
#for example we declare function a and b in starting.
#but we can call this function here.

#calling of function a.
a();

#calling of function b.
b();

#function also help in increasing code reusablity.
#we can use same code at many time without written it many time like.

#again calling of function c.
c(199);


?>
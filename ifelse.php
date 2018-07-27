<?php
//program of simple if statement
/*
$t = date("H");
if ($t<"20") {
  echo "have a good day!";
}
*/
//program of simple ifelse statement.
/*
$t = date("h");
if ($t>"20") {
  echo "have a good day!";
}
else{
  echo "have a good night!";
}
*/
$t = date("h");
if ($t>"20") {
  echo "have a good morning!";
}
elseif ($t<"20") {
  echo "have a good day!";
}
else {
  echo "have a good night!";
}
 ?>

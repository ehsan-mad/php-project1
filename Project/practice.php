<?php
//$number=20;
// $num=readline();
// if($num>0){
//  echo "Damn positive";
// }
// else if($num<0){
//     echo "Damn Negative";
//    }
//    elseif($num==0){
//     echo "nigga zero";
//    }
define("Username", "admin");
define("Password", "123");

echo "Enter the username";
$user=readline();

echo "Enter Password";
$Pass=readline();

if($user === Username && $Pass === Password){
    echo "Mile gese";
}
else{
    echo "mara khaw bro";
}
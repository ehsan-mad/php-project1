<?php

define ("USERNAME", "admin");
define("Password", "12345");

echo "Enter UserName:  ";

$inputUsername= readline();

echo "Enter Password:  ";

$inputPassword= readline();

if($inputUsername=== USERNAME && $inputPassword===Password){
    echo "Login Successful";

}else{
    echo "Invalid Username or Password.";
}
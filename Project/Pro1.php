<?php

echo "Enter a number:";
$number = (int)readline();

if ($number>0 ){
    echo "The number is positive.";
}

else if ($number<0 ){
    echo "The number is Negative.";
}

else{
    echo "The number is zero.";
}
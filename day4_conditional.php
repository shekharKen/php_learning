<?php

    // opertator
    // = assignment opt
    // mathematicals = +, -, *, /, %
    // conditnals , ==, === , <, >, <=, >=
    // || = or, atleat 1 match,
    // && = and, every condition should match 

    // 123 === "123"
    // require boolean values

    if(123 === "123") 
    {
        echo "value is true <br>";
    } 
    else 
    {
        echo "value is false <br>";
    }


    $arr = ["shekhar", "shazeb", "ashish"];
    $check = in_array("shekharasdfas", $arr);
    // echo $check;
    // echo "<br>";

    if($check) 
    {
        echo "exits <br>";
    } 
    else 
    {
        echo "not <br>";
    }

    $val = 3;
    if($val == 1) {
        echo "exist 1";

    } else if($val == 2) {
        echo "exist 2";

    } else if($val == 3) {
        echo "exist 3"; 
    }
    else {
        echo "not exists";
    }


    echo "last";

    // task - string check
    $str = "shekhar shazeb ashish";


    // modulas %
    $var = 4;
    $remain = $var % 2;

    // echo $remain;





?>
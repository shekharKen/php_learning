<?php

    // switch 

    switch (2) {
        case 1: 
            echo "one";
            break;

        case 2:
            echo "Two";
            break;
        
        default:
            echo "Not Exits";
            break;
    }

    echo "<br>";
    echo "<br>";

    $name = "ss";
    $ss = "ss";
    switch ($name) {
        case "aa": 
            echo "AA";
            break;

        case "bb":
            echo "BB";
            break;

        case $ss:
            echo "SS";
            break;
        
        default:
            echo "Not Exits";
            break;
    }

    echo "<br><br>";

    // loops
    // php has 4 loops -> for, while, do while, foreach

    // for loop
    // $i = $i + 1;

    $value = 2;
    for($i = 1; $i <= 10; $i++) {
        echo $i * $value;
        echo "<br>";    
    }

    // 2 * 1 = 2, 12 table
    // 2 * 2 = 4
    // 2 * 3 = 6










?>
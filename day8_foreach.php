<?php

    // foreach loop

    // first type
    $arr = ["apple", "mango", "banana"];
    foreach($arr as $value) {
        echo $value;
        echo "<br>";
    }

    // type 2
    $assocArr = ["furit1" => "apple", "furit2" => "mango", "furit3" => "banana"];

    foreach($assocArr as $key => $value) {

        echo "key" . $key . " => " . $value;
        echo "<br>";

    }

    echo "<br>";

    $multi = [
        "fruits" => ["apple", "mango", "banana"],
        "veg" => ["onion", "potato", "tomato"]
    ];

    foreach($multi as $key => $value) {
        echo "<h2>" . $key . "</h2>";
        echo "<ul>";
        foreach($value as $item) {
            echo "<li>" . $item . "</li>"; 

            // if($item === "onion") {
            //     break;
            // }
        } 
        echo "</ul>";
        echo "<br>";

    }

    // task 
    $task = [
        ["name" => "asdf", "class" => "1", "rollno" => 123],
        ["name" => "asdf", "class" => "1", "rollno" => 123],
        ["name" => "asdf", "class" => "1", "rollno" => 123],
        ["name" => "asdf", "class" => "1", "rollno" => 123],
    ];

    // name , class, rollno
    $heading = array_keys($task[0]);





?>
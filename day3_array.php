<?php

// arrays
    // array(), []

    $arr1 = array(123, 12.45, "abc", true);
    
    echo "<pre>";
    // print_r($arr1);

    $arr2 = [123, 12.45, "abc", true];
    // print_r($arr2);

    // types -> index, associative, multidimentional

    //index
    $index = [123, 12.45, "abc", true];
            // 0,  1,      2,      3

    // print_r($index);

    echo $index[2];
    echo "<br>";


    // asociative
    $assoc = ["num" => 123, "float" => 12.45, "string" => "abc", "bool" => true];
//          [0 => 123, 1 => 12.45, 2 => "abc", 3 => true]
    // print_r($assoc);

    echo $assoc["float"];
    echo "<br>";
    echo "<br>";

    // multi
    $multi = [
        123, 
        "key" => "value", 
        [456, "test"], 
        "arr" => array("abc" => 1122)
    ];
    // print_r($multi);
    echo $multi[1][1];

    echo "<br>";
    echo "<br>";

    echo $multi["arr"]["abc"];

    echo "<br>";
    echo "<br>";

    // functions 
    $arr2 = [123, 12.45, "abc", true];

    // count
    $count = count($arr2);
    echo $count;

    // how to get last index of an array ????



    // keys and values

    $assoc2 = ["num" => 123, "float" => 12.45, "string" => "abc", "bool" => true];

    print_r(array_keys($assoc2));
    print_r(array_values($assoc2));

    // array push
    $arr3 = [123, 12.45, "abc", true];
    array_push($arr3, "string");

    print_r($arr3);

    // pop
    array_pop($arr3);

    print_r($arr3);

    // array reves
    print_r(array_reverse($arr3));

    // sort
    sort($arr3); // asc
    rsort($arr2); // desc

    print_r($arr3);

    // assoc key
    ksort($assoc2);
    krsort($assoc);

    // assoc values
    asort($assoc);
    arsort($assoc);

    // merge
$a = [1, 2,3,4];
$b = [5,6, 7];

$c = array_merge($a, $b);

print_r($c);


// task - fruit / veg list in ul => li















?>
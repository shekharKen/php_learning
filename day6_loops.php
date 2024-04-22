<?php

// loops continued ..
$arr = ["a", "b", "c", "d"];
// echo $arr[0];

for($i = 0; $i <= 3; $i++) {
    echo $arr[$i];
    echo "<br>";
}

// task  ul > li 
$fruits = ["apple", "mango", "banana"];
$tag = "<ul>";

for($i = 0; $i < count($fruits); $i++) {
    $tag .= "<li>" . $fruits[$i] . "</li>";
}

$tag .= "</ul>";

echo $tag;


// condition
for($i = 1; $i < 10; $i++) {
    if($i%2 == 0) {
        echo $i . " is an even number";
    } else {
        echo $i . " is an odd number";
    }

    echo "<br>";
}

// multiple

for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= 5; $j++) {
        echo $i . " " . $j;
        echo "<br>";
    }

    echo "<br>";
}

echo "<br>";
 
// star pattern 
for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    echo "<br>";
}

// prime number


// table wala 




?>
<?php


// while
$i = 1;
while($i <= 10) { //condition
    echo $i;
    echo "<br>";

    // for($j=1; $j <= $i; $j++) {
    //     echo $j;
    // }

    $i++;
} 

echo "<br>";

$i = 10;
while($i >= 1) { //condition
    echo $i;
    echo "<br>";
    // $i -= 1;

    // $i = $i - 1;

    $i--;
} 

echo "<br>";

// do while
$i = 1;
do {
    if($i < 6) {
        echo $i;
        echo "<br>";
    }

    $i++;
} while($i <= 10);


$test = "first";
do {
    echo $test;

    $test = "second";
} while($test === "first");


// table 
$tables = "<table border=1>";

for($i = 1; $i <= 10; $i++) {
    $tables .= "<tr>";
    for($j = 1; $j <= 5; $j++) {
        $tables .= "<td>" . $j . "*" . $i . "=" . $i*$j . "</td>";
    }
    $tables .= "</tr>";
}

$tables .= "</table>";

echo $tables;


// 1 * 1, 2 * 1, 3 * 1










?>
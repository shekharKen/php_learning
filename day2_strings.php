<?php
    // string and functions 

    $a = "string1";
    $b = 'string2';

    // concatination === php => .
    // $c = " ";

    echo $a . " " . $b;

    $hstart = "<h1>";
    $hend = "</h1>";

    echo $hstart . "abc" . $hend;

    $cat = "<h3>";
    $cat .= "cat";
    $cat .= "</h3>";
    print($cat);

    $hstart = "abc";
    $hend = "def";
    $concat = $hstart . $hend;
    echo $concat;

    echo "</br>";
    echo "</br>";

    // string contains => 8.0
    $check = str_contains("i love php", "php"); // "abc"

    echo $check;

    echo "</br>";
    echo "</br>";

    // string postition 4.6 =<
    $pos = strpos("i love php", "php"); // "abc"

    echo $pos;

    echo "</br>";
    echo "</br>";

    // substring 
    $efg = substr("abcdefg", 4);
    echo $efg;

    $newefg = substr("abcdefg", 2, 3);  // 1=> whole string, 2 will leave 2 first two char, how many to pick

    echo $newefg;

    echo "</br>";
    echo "</br>";

    // length
    $length = strlen("abcdefg");
    echo $length;

    echo "</br>";
    echo "</br>";

    $nj = "abc adf asdfa";

    echo str_word_count($nj);

    // uppercase, lowercase, first capital, words
    $words = "hello world is here";
    echo "</br>";
    echo strtoupper($words);

    echo "</br>";
    $upper = "ABC UPPERCASE";
    echo strtolower($upper);


    echo "</br>";
    echo ucfirst($words);


    echo "</br>";
    echo ucwords($words);



    

    // textarea => words count and char 123/20 char/words
    




?>
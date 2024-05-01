<?php

// $_GET

// $first = $_GET['fname'];
// $last = $_GET['lname'];


// $_POST

// $first = $_POST['fname'];
// $last = $_POST['lname'];

// echo $first . " " . $last;


// isset() check the var exits or not

if(isset($_POST['submit'])) {

    $firstNum = $_POST['first'];
    $secNum = $_POST['sec'];

    echo $_POST['gender'];

    print_r($_POST['multi']);

    die("end of line");

    if(!empty($firstNum) && !empty($secNum)) {

        echo "multiplied; " . $firstNum * $secNum;

    } else {
        echo "Error: Please fill all fields!!";
    }
}












?>
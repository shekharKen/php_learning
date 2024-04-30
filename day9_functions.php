<?php


// comments -----
    // string comments ..

    # single line comment 2

    /**
     * multi line 
     *  comments
     */


// constants
    define("CONTANT_NAME", "value"); // case sense false default
    // CONTANT_NAME = "test";
    echo CONTANT_NAME;

    const NEW_CONSTANT = "test"; // case sense TRUE default



    // functions 
    function testFunction() 
    {
        echo "<br> test function called <br>";
    }

    // call function
    testFunction();

    function nameFunction($name = "test") 
    {
        echo ucfirst($name);
        echo "<br>";
    }

    nameFunction("Shekhar");
    nameFunction("Ashish");
    nameFunction("Shazeb");

    nameFunction();


    function sum($a, $b)
    {
        echo $a + $b;
    }

    sum(2, 5);
    sum(200, 500);
    sum(2, 5);



    function firstName($f)
    {
        echo "<br>";
        echo "first name :" . $f;
    }

    function lastName($l)
    {
        echo "<br>";
        echo "last name :" . $l;
    }

    function fullName($name)
    {
        $nameArr = explode(" ", $name);

        // print_r($nameArr);
        
        firstName($nameArr[0]);
        lastName($nameArr[1]);
    }


    fullName("test kumar");

    // recurssion
    function testRecu($i)
    {
        echo $i . "\t";
        $i++;

        if($i <= 5) {
            testRecu($i);
        }
    }

    testRecu(1);

    // returns 
    function oddOrEven($num)
    {
        if($num%2 === 0) {
            return "even";
        } else {
            return "odd";
        }
    }

    $res = oddOrEven(4);
    echo $res;

?>
<?php
    $intNum = 472;
    $doubleNum = 29.3;
    $boolean = true;
    $string = 'Web Code Geeks';
    $array = array("Pineapple", "Grapefruit", "Banana");

    // creating a class before declaring an object variable
    class person {
        function agePrint() {
            $age = 5;
            echo "This person is $age years old!";
        }
    }
    // creating a new object of type person
    $object = new person;

    echo "This is an integer number: $intNum" ."<br>";
    echo "This is a double number: $doubleNum" ."<br>";
    echo "This is a boolean value: $boolean" ."<br>";
    echo "This is a string: $string" ."<br>";
    echo "This is an array value: $array[1]" ."<br>";
    
?>
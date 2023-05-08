<?php


/*
================Create an object who's life is 5 seconds==========================

In This Exercise we are going to practice constructor and desturctor in PHP.

This is a very simple code example. You have to define a class with two magic methods __construct() and __destruct(). When you create the object of this class it should say "I have just been created" and exactly after five seconds delete that object and it should say "I lived only for 5 seconds in the memory.".

Note: Use exact same names for class, methods or variables as i will suggest, because i have written a testing code based on these names.

Follow the instructions bellow to write MyObject class

1: Define a class MyObject.

2: Define a constructor using magic method __construct(). Its visibility should be public and it shouldn't take any parameters. In the constructor print a message that

    "I have just been created.";

3: Define a destructor using magic method __destruct(). Its visibility should be public and it shouldn't take any parameters. In the destructor print a message that

    "I lived only for 5 seconds in the memory.";

MyObject class is completed now its time to create its object.

4: Before creating object, Print the current time using

echo date('h:i:s');  The Php's date('h:i:s') will give us the current time in hours, mins and seconds format.

5: Define a variable $testObj and assign it a new object of MyObject class.

6: Then use a php function sleep ( int $seconds) . It delays the program execution for the given number of seconds.

sleep(5);

7: Then call unset() on our object $testObj.

8: Then again use echo date('h:i:s');  to print the current time.

Let's do it.

 */

class MyObject {
    public function __construct(){
        echo "I have just been created.";
    }
    public function __destruct(){
        echo   "I lived only for 5 seconds in the memory.";
    }
}

echo date('h:i:s');
echo "<br>";
echo "<br>";
$testObj = new MyObject();
sleep(5);
echo "<br>";
echo "<br>";
echo date('h:i:s');
echo "<br>";
echo "<br>";
unset($testObj);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
#$color = "blue";
//echo "my car is ".$color."<br>";
/* ECHO "Hello World!"."<br>";
echo "Hello World!"."<br>";
Echo "Hello World!"; */

/*$x = 5;
$y = 5;
echo $x + $y."<br>";*/

//$x1 = 5 /* + 15 */ + 5;
//echo $x1."<br>";
//
//$txt="Mohammad";
//echo "Hello ".$txt."!"."<br>";
//var_dump($txt);
//var_dump($x);
//var_dump("Ali");

//$x = 5;
//$y = 6;
//function sum(){
//    global $x,$y;
//    $y = $x + $y;
//}
//sum();
//echo $y;

//$x = 5;
//$y = 10;
//
//function myTest() {
//    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
//}
//
//myTest();
//echo $y

//function myTest() {
//    static $x = 0;
//    echo $x;
//    $x++;
//}
//
//myTest();
//myTest();
//myTest();

/* $txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y; */

/* class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar); */

echo "<h1>Hello World!</h1><br>";
$number1 = 10;
$number2 = 56;
echo $number1 - $number2;
echo "<h1>Hello</h1><br>","<h2>Hello</h2><br>","<h3>Hello</h3><br>","<h4>Hello</h4><br>","<h5>Hello</h5>";

print "<h1>Hello World</h1>";

$s = 10.5;
var_dump($s);

$name = "Omid";
echo $name;
var_dump($name);

$v = true;
var_dump($v);

echo "<br>";

//$name = array("Mohammad","Ali","Hasan");
//var_dump($name);

$x = "Hello world!";
$x = null;
var_dump($x);

$x = 5;
var_dump($x);

$x = "Hello";
var_dump($x);

$d = 5;
$d = (string) $d;
var_dump($d);

$x = "John";
echo "Hello $x";

$x1 = "John";
echo 'Hello $x1';

$g = "Mohsen";
//echo "<br>";
//echo strlen($g);
//echo "<br>";
//echo strlen("Mohsen");
//echo str_word_count("Mohsen");
//echo strpos("Mohsen","sen","n");
echo strtoupper($g);
echo strtolower($g);

$b = "Hello";
echo str_replace($b,"Mohsen","Ali");


?>
</body>
</html>
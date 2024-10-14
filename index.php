<?php 
$title = "Learn PHP From Scratchh";
$welcome ="Welcome To The Course !!!";


// php functions 
// strings data type
var_dump($title); // this functions returns variable type and number of characters ex : string(23) "Learn PHP From Scratchh"
echo "<br/>";
echo gettype($title);// this function only returns variable type : ex : String
// integer data type
echo "<br/>";
$age = 15;
var_dump($age); // output = int(15)  returns the  number and type
echo "<br/>";
echo gettype($age); // returns type Ex : integer

// php is losly typed , meaning we dont have do sepcify type when creatin a variale , php guess that automaticaly 

$friends = ["asdsa","dsad","dd"];
echo "<br/>";
echo $friends; // this does not print the array and throws an error
echo "<br/>";
var_dump($friends); // return  of each array element  and array index mumber and value 
echo "<br/>";
print_r($friends); //is commonly used to display an array in a human-readable format. It's useful for debugging.
echo "<br/>";
echo implode(" -- " , $friends) // returns only the array values , seperated with first argument , in this case " -- "


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> <?= $title ?>  </title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $title ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"><?= $welcome ?></h2>
            <p>In this course, you will learn the fundamentals of the PHP language</p>
        </div>
    </div>
</body>

</html>
<?php
$title = "Learn PHP From Scratchh";
$welcome = "Welcome To The Course !!!";


// php functions 
// strings data type
var_dump($title); // this functions returns variable type and number of characters ex : string(23) "Learn PHP From Scratchh"
echo "<br/>";
echo gettype($title); // this function only returns variable type : ex : String
// integer data type
echo "<br/>";
$age = 15;
var_dump($age); // output = int(15)  returns the  number and type
echo "<br/>";
echo gettype($age); // returns type Ex : integer

// php is losly typed , meaning we dont have do sepcify type when creatin a variale , php guess that automaticaly 

$friends = ["asdsa", "dsad", "dd"];
echo "<br/>";
echo $friends; // this does not print the array and throws an error
echo "<br/>";
var_dump($friends); // return  of each array element  and array index mumber and value 
echo "<br/>";
print_r($friends); //is commonly used to display an array in a human-readable format. It's useful for debugging.
echo "<br/>";
echo implode(" -- ", $friends); // returns only the array values , seperated with first argument , in this case " -- "

$names = ["jack", "amine", "doe"];
var_dump($names);

$firstName = "Amine";
$lastName = "Tamar";
echo "<br/>";

echo 'hi my name is' . ' ' . $firstName . ' ' . $lastName . "<br/>";

echo "fsdfdsf";


$name = 'Linus';
function myTest() {
  $name = 'Tobias';
}
myTest();
echo $name;



echo "<br/>";

$name = 'Linus';
print '<h1>Hello $name</h1>';
print "<h1>Hello $name</h1>";

 echo strlen("Hello World!");

//some  Built in php functions 

//rand() generate a random integer
// getrandmax() shows largest possible integer that could be returned by rand()
//rand (1,10)  generate random numbers from 1 to 10



//round(4.7) round the number to the nears integer / output = 5

//ceil (4.7) round the number to the height next integer / output = 5

//floor (4.7) round the number to the lowest next integer / output = 4



//Array Functions 

//sort  sort element of arrays 
//rsort   reverse sort the elements of the arrays
// array_push ($array , elements)   push at the end of the array 
// array_pop ($array)  remove the last element
// array _shift ($array) remove the first elemnt 
// array_unshift ($array) add elemnt at the begining of the array


// array_slice  this function return a new array


//explode takes a string and tunred it into an array , you seperate the element by a character 
echo "<br/>";
$string = "this/is/a/string";
echo "<br/>";
$arrayFromString = explode("/", $string);
echo "<br/>";

print_r($arrayFromString);
echo "<br/>";
$output = null;
echo "<br/>";
$ids = [10, 22, 23, 35];
$users = ["user1", "user2", "user3"];

$output = count($ids);

// implode you turn an array into a string and you choose a charateer to seperat each element 


// array challenge 

$numbers = [0, 2, 3, 4, 8, 5, 6];
$sum = array_sum($numbers);
$amount = count($numbers);
echo  "the sum of the" . " " . $amount . " " .  "numbers is" . " " . $sum;

echo "<br/>";
$colors = ["red", "blue", "green", "yellow"];
$colors = array_reverse($colors);
print_r($colors);
echo "<br/>";
array_push($colors, "purple");
array_push($colors, "orange");
print_r($colors);
echo "<br/>";

$colors[1] = "pink";
print_r($colors);
echo "<br/>";

array_pop($colors);
echo "<br/>";
print_r($colors);

$jobListings = [

    [
        "id" => 0,
        "job_title" => "web dev",
        "company" => "BerlinGmbh3",
        "contact_email" => "amine3@gmail.com",
        "contact_phone" => "+212 55 5 1 55",
        "skills" => ["php", "css", "html"]
    ],

    [
        "id" => 1,
        "job_title" => "front web dev",
        "company" => "BerlinGmbh1",
        "contact_email" => "amine2@gmail.com",
        "contact_phone" => "+212 55 5 3 55",
        "skills" => ["js", "css", "html"]
    ],
    [
        "id" => 2,
        "job_title" => "backend web dev",
        "company" => "BerlinGmbh2",
        "contact_email" => "amine1@gmail.com",
        "contact_phone" => "+212 55 5 4 55",
        "skills" => ["php", "Mysql", "html"]
    ]
];
echo "<br/>";
print_r($jobListings);


$i = 0;
while ($i < 5 ) {

    echo  "<br/>" .  $i;

    $i++;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> <?= $title ?> </title>
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
            <p> <?php echo $output  ?></p>
            <h2> Ids Array :</h2>
            <p>
            <pre>
                    <?php print_r($ids) ?>
                </pre>
            </p>
            <h2> Users Array :</h2>
            <p>

            <ul>


                <?php for ($i = 0; $i <= 10; $i=$i+4): ?>

                    <li>Number : <?= $i ?> </li>

                <?php endfor; ?>


            </ul>

            </p>
        </div>
    </div>
</body>

</html>
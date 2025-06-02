<?php 
$fruits=["apple", "banana", "cherry"];
print_r($fruits);
 echo "<br>";
echo $fruits[2];
echo "<br>";
foreach($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<br>";
//Associative array
$personalInfo = [
    "fruit" => "apple",
    "age" => 30,
    "city" => "dhaka"

];

echo $personalInfo["fruit"];
echo "<br>";
foreach($personalInfo as $key => $value) {
    echo"$key :$value <br>";
    // echo "<br>Key: " . $key . ", Value: " . $value;
}

echo "<br>";
//Multidimensional array
$students = [
    [
        "name" => "john",
        "age" => 20,
        "email" => "abcd@gmail.com"
    ],

    [
        "name" => "william",
        "age" => 21,
        "email" => "cd@gmail.com"
    ]

];

echo $students[0]["name"];
echo "<br>";

//JSON
$jsonData = json_encode($personalInfo);
echo $jsonData;

echo "<br>";

$json = '{"fruit":"apple","age":30,"city":"dhaka"} ';

$arrayconvert = json_decode($json);

print_r($arrayconvert);







?>
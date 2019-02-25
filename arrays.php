<?php
//arrays
$names = ["Thomas", "Arnold", "Danson", "Kendi", "Sheila", "Wendy"];

$ages = [12,24,13,16,18,48,46,46,8,45,32,18,16,31,74,26,49,78];

echo $names[5];
echo "<hr>";
echo $ages[8];
echo "<hr>";

foreach ($names as $jina)
{
    echo "$jina <br>";
}

echo "<hr>";
echo sizeof($names);//count the # of names
echo "<hr>";
array_push($names , "Bush");
echo sizeof($names);
echo "<hr>";
var_dump($names);
echo "<hr>";
array_pop($names);
var_dump($names);
echo "<hr>";
rsort($ages);

foreach ($ages as $miaka)
{
    echo "$miaka<hr>";
}
echo "<hr>";
echo array_sum($ages);

echo "<hr>";
//associative array
$person =["names" => "Thomas Arnold", "age"=>30, "color"=>"red"];
echo $person["names"];
echo "<hr>";
echo $person["age"];
echo "<hr>";
echo $person["color"];

<?php
//functions
$number = 68;
$square_root = sqrt($number);
echo "Square root is $square_root";
echo "<br>";
echo sqrt(100);
echo "<br>";
echo pow(3.2,5.1);
echo "<br>";
echo max(54, 61,12, 121,154.21);
echo "<br>";
echo min(54, 61,12, 121,154);

echo "<hr>";
$x = 63.1464;
echo round($x);
echo "<hr>";
echo round($x, 2);
echo "<hr>";
echo floor($x);
echo "<hr>";
echo ceil($x);

echo "<hr>";
$sentence = "The quick brown fox jumped over a lazy dog";
echo strtoupper($sentence);
echo "<hr>";
echo $sentence;
echo "<hr>";
echo strtolower($sentence);
echo "<hr>";
echo ucwords($sentence);
echo "<hr>";
echo str_word_count($sentence);
echo "<hr>";
echo strlen($sentence); //number of letters

$passwoord = "p@55w0rd";

echo "<hr>";
echo md5($passwoord);
echo "<hr>";
echo sha1($passwoord);
//
echo "<hr>";
echo crypt($passwoord, "k8hsdlkhia;p'ag;hahgheuhb765mfherhbs");



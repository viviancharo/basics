<?php
//loops for, while , do-while, foreach
/*for ($x = 100; $x >= 0; $x--)
{
    $result = $x * $x;
    //echo "$x thomas<br>";
    echo "$x x $x = $result <br>";
}*/

//while loop

$z = 10;
while ($z<=100)
{
    $result = sqrt($z);
    echo "Squareroot $z is $result <br>";

    $z+=5;
}

$k = 1;
do{
    echo "$k <hr>";
    $k++;
}
while($k<=100);
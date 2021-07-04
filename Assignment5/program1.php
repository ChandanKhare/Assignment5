<?php

$count = 0;

//open file in aread mode.........

$file = fopen("document.txt","r");

$filePath = "document.txt";

$str = file_get_contents($filePath) or die("cannot read from file --bad file type!");

$array = file($filePath) or die("cannot read from file ! --error code 402!");


$newstr = preg_replace('/\s+/', ' ' ,$str);

$cchar = strlen($newstr);

$digits = preg_match_all("/[0-9]/", $str );

$vowel = preg_match_all("@[aeiouAEIOU]@", $str);



//performing the operations.........

while (($line = fgets($file)) !== false) {
// code...

//splits each line into words............

$words = explode(" ",$line);

//count each word

$count = $count + count($words);

}

//counts digit of file.......
//function countdigits($file)

//{

// return preg_match_all("/[0-9]", $file);
// }

//substr_count($file, ' ');

$lenght = strlen($filePath);

$lines = count(file($filePath));


echo "Total Words in the File :" . $count;
?>
<br>
<?php
echo "Total Numbers in the File :" . $digits;
?>
<br>
<?php

echo "Total Number of Vowels in the File :"  . $vowel;
?>
<br>
<?php

echo "Size of the File :" .$lenght; 
?>
<br>
<?php

echo "Total Number of Lines in the File :" .$lines;
?>
<br>
<?php

echo "Total Number of Characters in the File :" .$cchar;


fclose($file);




?>

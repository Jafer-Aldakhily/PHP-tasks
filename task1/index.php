<?php
// Q1 check if the input year is a leap year or not

$year = 2016;

if($year < 2000)
{
    if($year % 400 == 0)
    {
        echo "Leap year";
    }else{
        echo "Not leap year";
    }
    
}else{
    if($year % 4 == 0)
    {
        echo "Leap year";
    }else{
        echo "Not leap year";
    }
}

echo "<br>";

// Q2 season time

$temperature = 21;

if($temperature < 20)
{
    echo "we are in winter";
}else{
    echo "it is the summertime!";
}

echo "<br>";

// Q3 Write a PHP script to calculate the sum of the two integers. If the two values ​​are the same, then calculate the triple of their sum.

$first = 4;
$second = 4;
$result;
if($first == $second)
{
    $result = $first + $second;
    echo pow($result,3); 
}

echo "<br>";

// Q4 Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false

$x = 10;
$y = 20;
$sum = $x + $y;
if($sum == 30) 
{
    echo $sum;
}else{
    echo false;
}

echo "<br>";


// Q5 Write in PHP script to check if the given positive number is a multiple of 3.

$z = 15;
if($z % 2 == 1)
{
    echo true;
}else{
    echo false;
}


echo "<br>";

// Q6 Write a PHP script to check if the integer value ​​is in the range of [20-50] inclusive.

$sample = 35;

if($sample >= 20 & $sample <= 50)
{
    echo "true";
}else{
    echo "false";
}

echo "<br>";


// Q7 Write PHP script to find the largest number between the three integers

$num1 = 10;
$num2 = 5;
$num3 = 15;

if($num1 > $num2 & $num1 > $num3)
{
    echo "1st by value :  $num1 is the largest number";

}elseif($num2 > $num1 & $num2 > $num3)
{
    echo "2st by value :  $num2 is the largest number"; 
}else{
    echo "3th by value :  $num3 is the largest number";  
}





echo "<br>";


// Q8 Write PHP script to calculate the monthly electricity bill according to these rules

// For first 50 units – 2.50 JOD/Unit
// For next 100 units – 5.00 JOD/Unit
// For next 100 units – 6.20 JOD/Unit
// For units above 250 – 7.50 JOD/Unit


$units = 100;

if($units == 50)
{
    echo "The bill is 2.50 JOD/Unit";
}elseif($units == 100)
{
    echo "The bill is 5.00 JOD/Unit";
}elseif($units == 200)
{
    echo "The bill is 6.20 JOD/Unit";
}else{
    echo "The bill is 7.50 JOD/Unit";
}

echo "<br>";

// Q9 Write php script to make a calculator, the calculator should contain the four main operations 

$c1 = 5;
$c2 = 15;
$c3 = 3;
$c4 = 7;

function Addition($f1,$f2,$f3,$f4)
{
    echo $f1+ $f2+ $f3+ $f4 . "<br>";
}

function Subtraction($f1,$f2,$f3,$f4)
{
    echo $f1- $f2- $f3- $f4 . "<br>";
}

function Multiplication($f1,$f2,$f3,$f4)
{
    echo $f1* $f2* $f3* $f4 . "<br>";
}

function Division($f1,$f2,$f3,$f4)
{
    echo $f1/ $f2/ $f3/ $f4 . "<br>";
}

Addition($c1,$c2,$c3,$c4);
Subtraction($c1,$c2,$c3,$c4);
Multiplication($c1,$c2,$c3,$c4);
Division($c1,$c2,$c3,$c4);



// Q10 Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

$age = 15;

if($age >= 18)
{
    echo "is eligible to vote";
}else{
    echo "is no eligible to vote";
}

echo "<br>";


// Q11 Write php script  to check whether a number is positive, negative or zero

$inputNum = -5;

if($inputNum > 0)
{
    echo "The number is positive";
}elseif($inputNum == 0)
{
    echo "The number is zero";
}else{
    echo "The number is negative";
}

echo "<br>";



// Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’


$grade = 89;

// <60 F
// <70 D
// <80 C
// <90 B
// <100 A

if($grade < 60)
{
    echo "F";
}elseif($grade < 70)
{
    echo "D";
}elseif($grade < 80)
{
    echo "C";
}elseif($grade < 90)
{
    echo "B";
}else{
    echo "A";
}

echo "<br>";


// Arrays

// Q1
$colors = ["red","green","white"];

echo "The memory of that scene for me is like a frame of 
film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, 
the $colors[2] house, the leaden sky. 
The new president and his first lady. - Richard M. Nixon";

// Q2

echo "<ul>";
foreach($colors as $color)
{
echo "<li>$color</li>";
}
echo "</ul>";


// Q3

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", 
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", 
"France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", 
"Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", 
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
ksort($cities);
foreach($cities as $key => $value)
{
    echo "The capital of $key is $value <br>";
}

echo "<br>";


// Q4
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4];

echo "<br>";

// Q5

$numbers = [1,2,3,4,5];
$numbers[3] = 8;
print_r($numbers);

echo "<br>";
// Q6

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

sort($fruits);
foreach($fruits as $key => $value)
{
    echo "<pre>";
    echo "$key = $value";
    echo "</pre>";
}

echo "<br>";
// Q7

$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

sort($temperatures);

$length = count($temperatures);
function sum($arrs = [])
{
    $sum = 0;
    foreach($arrs as $value)
    {
        $sum += $value;
    }
    return $sum;
}
$tempSum = sum($temperatures);
$avg = $tempSum / $length;
echo "The average temperature is equal to $avg <br>";
print_r($temperatures);
echo "<br>";

$uniqueArray = array_unique($temperatures);
$lowestTems = array_slice($uniqueArray,0,5);
$heighestTems = array_slice($uniqueArray,-5,5);
print_r($lowestTems);
echo "<br>";
print_r($heighestTems);

echo "<br>";

// Q8


$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$array3 = array_merge($array1,$array2);

print_r($array3);

// Q9
echo "<br>";
$colors = array("red","blue", "white","yellow");

function upperCase($arrs = []){
    $upperArray = [];
    foreach ($arrs as $value) {
        $value = strtoupper($value);
        array_push($upperArray,$value);
    }
    return $upperArray;
}

$result = upperCase($colors);
print_r($result);

echo "<br>";

// Q10

function lowerCase($arrs = []){
    $lowerArray = [];
    foreach ($arrs as $value) {
        $value = strtolower($value);
        array_push($lowerArray,$value);
    }
    return $lowerArray;
}

$lowerResult = lowerCase($result);
print_r($lowerResult);


echo "<br>";

// Q11


function check()
{
    for ($i=200; $i <250 ; $i++) { 
        if($i % 4 == 0)
        {
            echo "$i <br>";
        }
    }
}

check();


// Q12


echo "<br>";

$words =  array("abcd","abc","de","hjjj","g","wer");


echo min(array_map("strlen",$words));
echo "<br>";
echo max(array_map("strlen",$words));

// Q13


function random()
{
    for ($i=0; $i < 10 ; $i++) { 
        echo rand(10,20)."<br>";
    }
}

random();


// Q14

echo "<br>";

// take an input array
// iterating through array
// declear a min variable to store value within it
// check if the number is number is not equal to zero
// store it in first iterate in min variable
// then you will check if the second element inside an array less than min 
// if it you will re-assign min by set the new value

$arrayMin = array( 2, 0, 10, 12, 6,1);
function MinValue($arrayMin)
{
    $min; 
    // $i // 2
    for($i=0; $i<= count($arrayMin)-1; $i++)
    {
        if($arrayMin[$i] != 0)
        {
            if($arrayMin[$i] < $arrayMin[$i++])
            {
                $min = $arrayMin[$i];
            }elseif($arrayMin[$i++] != 0){
                $min = $arrayMin[$i++];
            }else{
                continue;
            }
        }else{
            continue;
        }
    }

    echo "The min value : $min";
}

MinValue($arrayMin);




echo "<br>";




// loops Q1

echo "<br>";


$nums = [1,2,3,4,5,6,7,8,9,10];

for ($i=0; $i <= (count($nums) - 1); $i++) {
    if($nums[$i] == $nums[(count($nums) - 1)])
    {
        echo $nums[$i];
    }else{
        echo "$nums[$i]-";
    } 

}

echo "<br>";

// Q2

$sum;
for ($i=0; $i <= 30; $i++) { 
    if(is_integer($i))
    {
        $sum += $i;
    }
}

echo $sum;

echo "<br>";


// Q3

$x = ["A","B","C","D","E"];

for ($row=0; $row < count($x); $row++) {
    if($x[$row] !== $x[ count($x) - 1])
    {
        if($row == 0)
        {
            for ($col=0; $col < count($x); $col++) {
                echo "$x[$row] ";
            }
        }
        if($row == 1)
        {
            for ($col=0; $col < count($x); $col++) {
                if($col > 2)
                {
                    echo "$x[$row] ";    
                }else{
                    echo "$x[0] ";
                }
            }   
        }

        if($row == 2)
        {
            for ($col=0; $col < count($x); $col++) {
                if($col > 1)
                {
                    echo "$x[$row] ";    
                }else{
                    echo "$x[0] ";
                }
            }   
        }

        if($row == 3)
        {
            for ($col=0; $col < count($x); $col++) {
                
                if($col > 0)
                {
                    echo "$x[$row] ";    
                }else{
                    echo "$x[0] ";
                }
            }   
        }

        if($row == 4)
        {
            for ($col=0; $col < count($x); $col++) {
                
                if($col > 0)
                {
                    echo "$x[$row] ";    
                }else{
                    echo "$x[0] ";
                }
            }   
        }

    }else{
        for ($col=0; $col <= (count($x) - 1); $col++) {
            echo $x[count($x) - 1]. " ";
        }
    }
    echo "<br>";
}



// Q4

$n = [1,2,3,4,5];

for ($row=0; $row < count($n); $row++) { 
    if($n[$row] !== $n[count($n) - 1])
    {
        if($row == 0)
        {
            for ($col=0; $col < count($n); $col++) {
                    echo $n[$row]." ";
            }
        }

        if($row == 1)
        {
            for ($col=0; $col < count($n); $col++) {
                if($col > count($n) / 2)
                {
                    echo $n[$row]." ";   
                }else{
                    echo $n[$row - 1]." ";
                }
            }
        }

        if($row == 2)
        {
            for ($col=0; $col < count($n); $col++) { 
                if($col > 1)
                {
                    echo $n[$row]." ";   
                }else{
                    echo $n[0]." ";
                } 
            }
        }

        if($row == 3)
        {
            for ($col=0; $col < count($n); $col++) { 
                if($col > 0)
                {
                    echo $n[$row]." ";   
                }else{
                    echo $n[0]." ";
                } 
            }
        }

        if($row == 4)
        {
            for ($col=0; $col < count($n); $col++) { 
                echo $n[$row]." "; 
            }
        }


    }else{
        for ($col=0; $col < count($n); $col++) { 
            echo $n[count($n) - 1]." "; 
        }
    }

    echo "<br>";
}


// Q5

$indexs = [1,2,3,4,5];
$len = count($indexs);
for ($row=0; $row <= $len - 1 ; $row++) { 
    for ($col=0; $col <= $len - 1 ; $col++) { 
       if($row == $col)
       {
        echo $indexs[$row];
       }else{
        echo 0;
       }
    }

    echo "<br>";
}



// Q6

echo "<br>";

$inp = 5;
$sum = 0;
for ($i=0; $i < $inp ; $i++) { 
    $sum += $inp * $inp - 1;
}

echo $sum;


echo "<br>";


// Q7

echo "<br>";

$x = 0;    
$y = 1; 

for($i=0;$i<=10;$i++)    
{    
    $z = $x + $y;    
    echo $z."<br />";         
    $x=$y;       
    $y=$z;     
} 


// Q8
echo "<br>";
$orangeString = "Orange Coding Academy";
$counter = 0;
for($i=0; $i < strlen($orangeString); $i++)
{
    if($orangeString[$i] == "c" || $orangeString[$i] == "C")
    {
        $counter ++;
    }
}

echo "The number of c or C is equal to = $counter";




// Q9

echo "<br>";


$multi = [1,2,3,4,5];

echo '<table border=1 cellpadding="3px"  spacing="0px">';
for ($row=0; $row < count($multi); $row++) { 
    if($row == 0)
    {
        echo "<tr>";
        for ($col=0; $col < count($multi); $col++) { 
            echo "<td>"." 1 * $multi[$col] =  ".$multi[$row] * $multi[$col]. "</td>";
        }
        echo "</tr>";
        
    }

    if($row == 1)
    {
        echo "<tr>";
        for ($col=0; $col < count($multi); $col++) { 
            
            echo "<td>"."2 * $multi[$col] = ".$multi[$row] * $multi[$col]."</td>";
        }
        echo "</tr>";
        
    }

    if($row == 2)
    {
        echo "<tr>";
        for ($col=0; $col < count($multi); $col++) { 
            
            echo "<td>"."3 * $multi[$col] = ".$multi[$row] * $multi[$col]."</td>";
        }
        echo "</tr>";
        
    }

    if($row == 3)
    {
        echo "<tr>";
        for ($col=0; $col < count($multi); $col++) { 
            
            echo "<td>"."4 * $multi[$col] = ".$multi[$row] * $multi[$col]."</td>";
        }
        echo "</tr>";
        
    }

    if($row == 4)
    {
        echo "<tr>";
        for ($col=0; $col < count($multi); $col++) { 
            
            echo "<td>"."5 * $multi[$col] = ".$multi[$row] * $multi[$col]."</td>";
        }
        echo "</tr>";
        
    }    

    
    

}

echo '</table>';

echo "<br>";


// Q10

for ($i=1; $i <= 50; $i++) { 
    if($i % 3 == 0)
    {
        echo "Fizz";
    }else if($i % 5 == 0)
    {
        echo "Buzz";
    }else if($i % 3 == 0 & $i % 5 == 0)
    {
        echo "Fizz Buzz";
    }else{
        echo $i;
    }
}

echo "<br>";

// Q11

$tri = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];

// loop over array
// loop every elements depending on row number
// FX: row 1 print first element
// row 2 print two second elements
// row 3 print next three elements and so on.

for($i=0;$i<count($tri); $i++)
{
    for($row=1;$row <= 5; $row++)
    {
        switch ($row) {
            case 1:
                echo $tri[$i]."<br>";
                $i++;
                break;
            case 2:
                echo $tri[$i].$tri[++$i]."<br>";
                $i++;
                break;
            case 3:
                echo $tri[$i].$tri[++$i].$tri[++$i]."<br>";
                $i++;
                break;
            case 4:
                echo $tri[$i].$tri[++$i].$tri[++$i].$tri[++$i]."<br>";
                $i++;
                break;
            case 5:
                echo $tri[$i].$tri[++$i].$tri[++$i].$tri[++$i].$tri[++$i]."<br>";
                $i++;
                break;
        }
    }
}





// Q12
$patt = ["A","B","C","D","E"];

$alpha = range('A', 'E');

for($i=0; $i<5; $i++){
  for($j=0; $j>5; $j++){  
    echo $alpha[$i];  
    } 
    echo "<br>";  
  for($j=5; $j>$i; $j--){  
    echo $alpha[$i];  
    }  
    echo "<br>";  
}  
echo "<br>";




// Functions 

// Q1

function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = 47;
$status_val = check_prime($num);
if ($status_val == 1)
   echo "It is a prime number";
else
   echo "It is a non-prime number";


echo "<br>";


// Q2 

$str = "remove";
echo strrev($str);


// Q3 check

echo "<br>";

$strArr =  str_split($str);
for ($i=0; $i <= count($strArr) - 1; $i++) { 
    if(ctype_lower($strArr[$i]))
    {
        if($i ==  (count($strArr) - 1))
        {
            echo "Your String is Ok";
        }
        continue;
    }else{
        echo "Your String is not Ok";
        break;
    }
}


// Q4

echo "<br>";


function swap(&$a,&$b)
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$z = 10;
$f = 20;
echo "Before calling a function $z and $f <br>";
swap($z,$f);
echo "After calling a function $z and $f <br>";



// Q5 ArmStrong number

function armstrong_number($num) {
    $sl = strlen($num);
    $sum = 0;
    $num = (string)$num;
    for ($i = 0; $i < $sl; $i++) {
      $sum = $sum + pow((string)$num[$i],$sl);
    }
    if ((string)$sum == (string)$num) {
      return "True";
    } else {
      return "False";
    }
  }
  echo "Is 153 Armstrong number? ".armstrong_number(153);
  echo "\nIs 21 Armstrong number? ".armstrong_number(21);
  echo "\nIs 4587 Armstrong number? ".armstrong_number(4587);


echo "<br>";

// Q6 Palndrom


function CheckPalndrom($str)
{
    $arr = str_split($str);
    $arr2 = array_reverse($arr);
    
    for ($i=0; $i <= count($arr) - 1; $i++) { 
        if($arr[$i] == $arr2[$i])
        {
            if($i == count($arr) - 1)
            {
                echo "Yes it is a palindrome";
            }
            continue;
        }else{
            echo "it is not a palindrome";
            break;
        }
    }

}
CheckPalndrom("moom");
echo "<br>";



// Q7 

$array1 = array(2, 4, 7, 4, 8, 4);
print_r($array1);
$array2 = array_unique($array1);
echo "<br>";
print_r($array2);


// Q8

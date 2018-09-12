<?php

echo "-------------<br>";
echo "Задание 1<br>";
echo "-------------<br>";

$a = -10;
$b = -12;
 
if ($a>0 && $b>0) {
    $c = $a + $b;
    echo "числа положительные, их сумма ".$c." <br>"; 

} elseif (($a<0) && ($b<0)){
    $c = $a * $b;
    echo "числа отрицательные, их произведение ".$c." <br>"; 

} else {
    if ($a > $b){
        $c = $a-$b;
    } 
        else {
            $c = $b-$a; 
        }
    echo "числа имеют разные знаки, их разность ".$c." <br>"; 
}

echo "-------------<br>";
echo "Задание 3<br>";
echo "-------------<br>";

function sum($a, $b){
    return $a + $b;
}

function substract($a, $b){
    return $a - $b;
}

function multiply($a, $b){
    return $a * $b;
}

function divide($a, $b){
    return $a / $b;
}

$x1=10;
$x2=15;

echo "Результат сложения ".$x1." и ".$x2." = ".sum($x1, $x2)."<br>";
echo "Результат вычитания ".$x1." и ".$x2." = ".substract($x1, $x2)."<br>";
echo "Результат умножения ".$x1." и ".$x2." = ".multiply($x1, $x2)."<br>";
echo "Результат деления ".$x1." и ".$x2." = ".divide($x1, $x2)."<br>";

echo "-------------<br>";
echo "Задание 4<br>";
echo "-------------<br>";

function MathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case 1:
            return sum($arg1, $arg2);
            break;
        case 2:
            return substract($arg1, $arg2);
            break;
        case 3:
            return multiply($arg1, $arg2);
            break;
        case 4:
            return divide($arg1, $arg2);
            break;
    }
}

$z1=33;
$z2=44;

echo "MathOperation ".$z1." и ".$z2." 1 - сумма = ".MathOperation($z1, $z2, 1)."<br>";
echo "MathOperation ".$z1." и ".$z2." 2 - вычитание = ".MathOperation($z1, $z2, 2)."<br>";
echo "MathOperation ".$z1." и ".$z2." 3 - умножение = ".MathOperation($z1, $z2, 3)."<br>";
echo "MathOperation ".$z1." и ".$z2." 4 - деление = ".MathOperation($z1, $z2, 4)."<br>";

echo "-------------<br>";
echo "Задание 6<br>";
echo "-------------<br>";

function recurs($arg, $step){
   if ($step==0) {
       return 1;
   } 
   if($step<0){
       return recurs(1/$arg, -$step);
   }
   return $arg * recurs($arg, $step-1);
}

echo "3 во 3-й степени = ".recurs(3, 3)."<br>";


echo "-------------<br>";
echo "Задание 7<br>";
echo "-------------<br>";

function pluralForm($n, $form1, $form2, $form5)
{
    $n = abs($n) % 100;
    $n1 = $n % 10;
    if ($n > 10 && $n < 20) return $form5;
    if ($n1 > 1 && $n1 < 5) return $form2;
    if ($n1 == 1) return $form1;
    return $form5;
}

$hours = date("G");
$mins = date("i");
echo "Задание 7<br>";
echo "Cейчас $hours ".pluralForm($hours, "час", "часа", "часов");

echo " и $mins ".pluralForm($mins, "минута", "минуты", "минут");

?>
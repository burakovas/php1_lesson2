<?php

function pluralForm($n, $form1, $form2, $form5)
{
    $n = abs($n) % 100;
    $n1 = $n % 10;
    if ($n > 10 && $n < 20) return $form5;
    if ($n1 > 1 && $n1 < 5) return $form2;
    if ($n1 == 1) return $form1;
    return $
$hours = date("G");
$mins = date("i");
echo "<br>";
echo "Cейчас $hours ".pluralForm($hours, "час", "часа", "часов");

echo " и $mins ".pluralForm($mins, "минута", "минуты", "минут");

?>
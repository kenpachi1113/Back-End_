<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
</head>
<body>

<?php




echo "Полину в мріях в купель океану,<br/>";
echo "Відчую <strong>шовковистість</strong> глибини,<br/>";
echo "Чарівні мушлі з дна собі дістану,<br/>";
echo" Щоб <strong><em>взимку</em></span></strong>";
echo"<p style='margin-left: 20px;'><u>тішили</u></p>";
echo"<p style='margin-left: 40px;'> мене</p>";
echo"  <p style='margin-left: 50px;'>вони…</p>";
$sumaGrn = 1500;

$kurs = 0.034;


$sumaDol = $sumaGrn * $kurs;

echo "$sumaGrn грн. можна обміняти на " . round($sumaDol, 2) . " долар";

echo "<br/>";
$month = 1;
if ($month = 12 && $month <= 2) {
    echo "Зима";

} elseif ($month = 3 && $month <= 5) {
    echo "Весна";
} elseif ($month >= 6 && $month <= 8) {
    $season = "Літо";
}
    elseif($month >=9 && $month <= 11)
        echo "Осінь";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$letter = "м";
switch($letter){
    case 'а':
    case 'є':
    case 'ю':
    case 'и':
    case 'е':
    case 'у':
    case 'о':
    case 'ї':
    case 'я':
    case 'і':
        echo"Голосна";
    default:
        echo "Приголосна";

}
echo "<br/>";
echo "<br/>";

$randomNum = mt_rand(100, 999);
echo "Випадкове тризначне число: $randomNum";

echo "<br/>";
echo "<br/>";

$sum = array_sum(str_split($randomNum));
echo "Сума цифр: $sum";

echo "<br/>";
echo "<br/>";

$reversedNumber = intval(strrev($randomNum));
echo "Число в зворотному порядку: $reversedNumber";
$sortNum = str_split($randomNum);
rsort($sortNum);
$sortNewNum = intval(implode($sortNum));
echo "Найбільше число: $sortNewNum";

echo "<br/>";
echo "<br/>";







?>




</body>
</html>

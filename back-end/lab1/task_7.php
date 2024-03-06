<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
</head>

<body style="background-color: black;">
<?php

function generateRandomColor()
{
   return '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
}

function generateTable($rows, $columns)
{
    echo '<table border="1" cellpadding="5">';
   for ($i = 0; $i < $rows; $i++) {
      echo '<tr>';
     for ($j = 0; $j < $columns; $j++) {
        $color = generateRandomColor();
       echo "<td style='background-color: $color;'></td>";
  }
 echo '</tr>';
}
echo '</table>';
}

generateTable(5, 5);
function generateRedColor() {
    return '#FF0000';
}

function generateRandomSize() {
    return rand(20, 100);
}

function generateRandomPosition() {
    return rand(300 , 500);
}

function generateRandomSquares($n) {
    echo "<style>";
    for ($i = 0; $i < $n; $i++) {
        $redcolor = generateRedColor();
        $size = generateRandomSize();
        $positionX = generateRandomPosition();
        $positionY = generateRandomPosition();

        echo ".square$i {
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            background-color: $redcolor;
            left: ${positionX}px;
            top: ${positionY}px;
        }";
    }
    echo "</style>";

    for ($i = 0; $i < $n; $i++) {
        echo "<div class='square$i'></div>";
    }
}


generateRandomSquares(5);
?>
</body>
</html>
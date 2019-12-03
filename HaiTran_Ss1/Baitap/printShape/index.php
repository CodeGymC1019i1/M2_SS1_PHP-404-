<?php
function printRectangle() {
    $draw = '';
    for($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 5; $j++)
            $draw .= ' * ';
        $draw .= "<br>";
    }
    return $draw;
}

function printSquareTriangle() {
    $draw = '';
    for($i = 0; $i < 5; $i++) {
        for ($j = 0; $j <= $i; $j++)
            $draw .= ' * ';
        $draw .= "<br>";
    }
    return $draw;
}

function printIsosscelesTriangle() {
    $draw = '';
    for($i = 0; $i < 5; $i++) {
        for ($j = 5; $j >= $i; $j--)
            $draw .= ' * ';
        $draw .= "<br>";
    }
    return $draw.'*';
}


if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $valueSelect = $_POST["selectShape"];
    switch ($valueSelect) {
        case 1:
            $printShape = printRectangle();
            break;
        case 2:
            $printShape = printSquareTriangle();
            break;
        case 3:
            $printShape = printIsosscelesTriangle();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <form action="" method="post">
        <fieldset>
            <legend>Menu</legend>
            Choose your selection:
            <select name="selectShape" id="">
                <option value="1">1. Print the rectangle.</option>
                <option value="2">2. Print the square triangle.</option>
                <option value="3">3. Print isosceles triangle.</option>
                <option value="4">4. Exit.</option>
            </select>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</div>
<div>
    <?php
        echo $printShape;
    ?>
</div>
</body>
</html>
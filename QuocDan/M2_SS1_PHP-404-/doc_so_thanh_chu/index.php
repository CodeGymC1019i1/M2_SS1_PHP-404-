<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>doc so thanh chu</title>
</head>
<body>
<div>
    <form method="post" action="">
        <input type="number" name="input">
        <input type="submit" name="submit">
    </form>
</div>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = "";
    $searchNumber = $_POST["input"];
    switch (floor($searchNumber/ 100)) {
        case 0:
            $string = " ";
            break;
        case 1:
            $string = "One hundred and ";
            break;
        case 2:
            $string = "Two hundred and ";
            break;
        case 3:
            $string = "Three hundred and ";
            break;
        case 4:
            $string = "Four hundred and ";
            break;
        case 5:
            $string = "Five hundred and ";
            break;
        case 6:
            $string = "Six hundred and ";
            break;
        case 7:
            $string = "Seven hundred and ";
            break;
        case 8:
            $string = "Eight hundred and ";
            break;
        case 9:
            $string = "Nine hundred and ";
            break;

    }
    if (floor(($searchNumber % 100) / 10) != 1) {
        switch (floor(($searchNumber % 100)/10)) {
            case 0:
                $string .= " ";
                break;
            case 2:
                $string .= "twenty ";
                break;
            case 3:
                $string .= "thirty ";
                break;
            case 4:
                $string .= "forty ";
                break;
            case 5:
                $string .= "fifty ";
                break;
            case 6:
                $string .= "sixty ";
                break;
            case 7:
                $string .= "seventy ";
                break;
            case 8:
                $string .= "eighty ";
                break;
            case 9:
                $string .= "ninety ";
                break;
        }
        switch (($searchNumber % 100) % 10) {
            case 1:
                $string .= "one ";
                break;
            case 2:
                $string .= "two ";
                break;
            case 3:
                $string .= "three ";
                break;
            case 4:
                $string .= "four ";
                break;
            case 5:
                $string .= "five ";
                break;
            case 6:
                $string .= "six ";
                break;
            case 7:
                $string .= "seven ";
                break;
            case 8:
                $string .= "eight ";
                break;
            case 9:
                $string .= "nine ";
                break;

        }
    } else {
        switch (($searchNumber % 100) % 10){
            case 0:
                $string .= "ten ";
                break;
            case 1:
                $string .= "eleven ";
                break;
            case 2:
                $string .= "twelve ";
                break;
            case 3:
                $string .= "thirteen ";
                break;
            case 4:
                $string .= "fourteen ";
                break;
            case 5:
                $string .= "fifteen ";
                break;
            case 6:
                $string .= "sixteen ";
                break;
            case 7:
                $string .= "seventeen ";
                break;
            case 8:
                $string .= "eighteen ";
                break;
            case 9:
                $string .= "nineteen ";
                break;

        }

    }
}
echo $string;
?>

</body>
</html>
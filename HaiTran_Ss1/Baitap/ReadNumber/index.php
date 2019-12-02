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

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
}

$units = ["", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];
$dozens = ["twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"];
$tens = ['ten', 'eleven', 'twelves', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eightteen', 'nineteen'];



// đây là cách dài vãi loèn
$numberLength = strlen($number);
$numberLetter = [];
$number = (int)$number;
$readNumber = '';
$i = 0;

while ($number > 0) {
    $numberLetter[$i++] = $number % 10;
    $number = ($number - $number % 10) / 10;
}


switch ($numberLength) {
    case 1:
        if ($numberLetter[0] == 0)
            $readNumber.'zero';
        else
            $readNumber.=$units[$numberLetter[0]];
        break;
    case 2:
        if ($numberLetter[1] > 1) {
            $readNumber .= $dozens[$numberLetter[1] - 2];
            $readNumber.= ' '.$units[$numberLetter[0]];
        }
        else
            $readNumber.= $tens[$numberLetter[0]];
        break;
    case 3:
        $readNumber .= $units[$numberLetter[2]].' hundred ';
        if($numberLetter[1] != 0 || $numberLetter[0] != 0) {
            $readNumber .= 'and ';
            if ($numberLetter[1] > 1) {
                $readNumber .= $dozens[$numberLetter[1] - 2];
                $readNumber .= ' ' . $units[$numberLetter[0]];
            } else if ($numberLetter[1] == 1)
                $readNumber .= $tens[$numberLetter[0]];
            else
                $readNumber .= $units[$numberLetter[0]];
        }
}
?>

<div class="login">
    <form action="" method="post">
        <input type="number" name="number" placeholder="Nhập số cần đọc" value="<?php echo $_POST["number"]; ?>"/>
        <input type="submit" value="Đọc số"/><br/>
        <input type="text" value="<?php echo $readNumber ?>"/>
    </form>
</div>

</body>
</html>

<!--$numberLength = strlen($number);-->
<!--$numberChar = [];-->
<!--$number = (int)$number;-->
<!--$readNumber = '';-->
<!--$i = 0;-->
<!---->
<!--while ($number > 0) {-->
<!--$numberChar[$i++] = $number % 10;-->
<!--$number = ($number - $number % 10) / 10;-->
<!--};-->
<!---->
<!--if ($numberChar[2] > 0)-->
<!--$readNumber .= $units[$numberChar[2]].' hundred';-->
<!--if ($numberChar[1] > 1)-->
<!--$readNumber .= ' and '.$dozens[$numberChar[1] - 2];-->
<!--elseif ($numberChar > 0)-->
<!--$readNumber .= ' and '.$tens[$numberChar[0]];-->
<!--if ($numberChar[0] == 0 && $numberLength == 1)-->
<!--$readNumber .= 'zero';-->
<!--elseif($numberChar[0])-->
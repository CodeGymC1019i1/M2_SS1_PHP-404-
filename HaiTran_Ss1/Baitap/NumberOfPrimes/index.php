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
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
}

$i = 2;
$count = 0;
$listPrimes = '';
$amount = (int) $amount;

while ($count < $amount) {
    $isPrime = true;
    for ($j = 2; $j <= sqrt($i); $j++)
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    if ($isPrime) {
        $count++;
        $listPrimes .= $i . ' ';
    }
    $i++;
}
?>


<div>
    <form action="" method="post">
        <input type="number" name="amount" placeholder="Type number of first primes">
        <input type="submit" value="Find">
    </form>
    <span><?php echo $amount ?> first primes: </span><br>
    <p><?php echo $listPrimes ?></p>
</div>
</body>
</html>
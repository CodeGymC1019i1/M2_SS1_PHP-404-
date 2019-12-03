<<!doctype html>
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
    $principal = $_POST["principal"];
    $yearlyInterest = $_POST["yearlyInterest"];
    $numberOfYears = $_POST["numberOfYears"];
}
$futureAmount = $principal;
for($i = 0; $i < $numberOfYears; $i++)
    $futureAmount += $futureAmount * $yearlyInterest / 100;
?>

<div>
    <form action="" method="post">
        <input type="number" name="principal" placeholder="Inventment Amount" /><br>
        <input type="number" name="yearlyInterest" placeholder="Yearly Interest(%)"/><br>
        <input type="number" name="numberOfYears" placeholder="Number Of Years"/><br>
        <input type="submit" value="Calculate"/><br>
        <input type="number" id="result" placeholder="Future Amount" value="<?php echo $futureAmount ?>"/>
    </form>
</div>

</body>
</html>

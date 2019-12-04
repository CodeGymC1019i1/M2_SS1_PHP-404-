<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $principal = $_POST["investment"];
    $yearlyInterest = $_POST["rate"];
    $numberOfYears = $_POST["year"];
}
$futureAmount = $principal;
for($i = 0; $i < $numberOfYears; $i++)
    $futureAmount += $futureAmount * $yearlyInterest / 100;
echo $futureAmount;
?>
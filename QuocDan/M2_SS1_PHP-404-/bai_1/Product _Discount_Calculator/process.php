<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Description = $_POST["description"];
    $Price = $_POST["price"];
    $Percent = $_POST["percent"];
}


    $discountAmount =Price * Percent * 0.1;
echo $discountAmount;
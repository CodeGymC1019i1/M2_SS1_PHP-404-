<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            border: 1px black solid;
            align-self: center;
        }

        h1 {
            color: blue;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $price = $_POST["Price"];
    $discountPercent = $_POST["DiscountPercent"];
    $productName = $_POST["productName"];
}
$discountPrice = $price - $discountPercent * $price / 100;
?>

<table>
    <h1>Product Discount Calculator</h1>
    <tr>
        <td>Product Description:</td>
        <td><?php echo $productName ?></td>
    </tr>
    <tr>
        <td>List Price:</td>
        <td><?php echo $price ?></td>
    </tr>
    <tr>
        <td>Discount Percent:</td>
        <td><?php echo $discountPercent ?></td>
    </tr>
    <tr>
        <td>Discount Price:</td>
        <td><?php echo $discountPrice ?></td>
    </tr>
</table>
</body>
</html>
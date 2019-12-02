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


<table>
    <form method="post" action="display_discount.php">
        <h1>Product Discount Calculator</h1>
        <tr>
            <td>Product Description:</td>
            <td><input type="text" name="productName"></td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td><input type="number" name="Price"></td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td><input type="number" name="DiscountPercent">(%)</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Caculate Discount"></td>
        </tr>
    </form>
</table>
</body>
</html>
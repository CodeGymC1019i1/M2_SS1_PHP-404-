<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="post" action="process.php">
        <label>Product Description</label>
        <input type="number" name="description"><br>
        <label> List Price:</label>
        <input type="number" name="price"><br>
        <label>Discount Percent</label>
        <input type="number" name="discount_percent"><br>

        <div id="submit">
            <input type="submit"  name="submit" value="Calculate" >
        </div>
    </form>

</div>
</body>
</html>
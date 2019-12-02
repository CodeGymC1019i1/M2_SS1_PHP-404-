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
    $USD = $_POST["USD"];
    $convertRate = $_POST["convertRate"];
}
$USD = (int) $USD;
$convertRate = (int) $convertRate;
$VND = $USD * $convertRate;

?>

<div>
    <form action="" method="post">
        <h1>Convert Money</h1>
        <input type="number" name="USD" placeholder="USD Amount"><br>
        <input type="number" name="convertRate" placeholder="Convert Rate"><br>
        <input type="submit" value="Convert"><br>
        <input type="text" value=" <?php echo $VND; ?> ">
    </form>
</div>
</body>
</html>
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
    <h1>Future Value Calculator</h1>
    <form method="post" action="process.php">
        <label>Investment Amount:</label>
        <input type="number" name="investment" placeholder="Tiền Gửi"><br>
        <label> Year Interest Rate:</label>
        <input type="number" name="rate" placeholder=" Lãi Suất "><br>
        <label>Number of Years</label>
        <input type="number" name="year" placeholder="Năm Gửi "><br>

    <div id="submit">
        <input type="submit"  name="submit" value="Calculate" >
    </div>
    </form>
</div>

</body>
</html>
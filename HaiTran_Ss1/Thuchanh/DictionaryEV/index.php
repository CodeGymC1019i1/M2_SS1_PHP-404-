<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>

    </style>
</head>
<body>
<?php
$dictionary = array('dog' => 'con chó', 'game' => 'trò chơi', 'duck' => 'con vịt', 'chicken' => 'con gà');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchWord = $_POST["search"];
    foreach($dictionary as $word => $description){
        if ($word == $searchWord) {
            $wordTranslate = $description;
        }
    }
}
?>
<div id="form">
    <h1>Từ Điển Anh - Việt</h1>
    <form action="" method="post">
        <input type="text" name="search" placeholder="Enter the required word" value="<?php echo $_POST["search"]; ?>"/>
        <input type="submit" id="submit" value="Find"/><br>
        <input type="text" value="<?php echo $wordTranslate?>"/>
    </form>
</div>

</body>
</html>
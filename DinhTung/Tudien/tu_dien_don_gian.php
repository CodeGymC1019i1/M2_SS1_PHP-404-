<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Tu Dien Anh Viet</h2>
<form method="post">
    <input type="text" name="search" placeholder="Nhap tu can tim">
    <input type="submit" value="Tim">
    <?php
        $dictionary = array("hello"=>"xin chao", "how"=>"nhu nao", "book"=>"quyen vo", "go"=>"di");
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $searchword = $_POST["search"];
        $flag = 0;
        foreach ($dictionary as $word => $description){
            if ($word == $searchword){
                echo "Tu: ". $word . "<br/>Nghia cua tu: ".$description;
                echo "<br/>";
                $flag = 1;
            }
        }
        if ($flag == 0){
            echo "khong tim thay tu can tra";
        }
    }
    ?>
</form>
</body>
</html>
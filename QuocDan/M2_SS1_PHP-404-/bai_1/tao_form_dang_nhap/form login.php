<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
    <style>
        .login {
            height:180px; width:230px;
            margin:0;
            padding:10px;
            border:1px #CCC solid;
        }
        .login input {
            padding:5px; margin:5px
    </style>
</head>
<body>
<form method="post"  action="login.php">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" placeholder ="username"/>
        <input type="password" name="password"placeholder="password"/>
        <input type="submit" name="submit" value="Sign in">
    </div>
</form>
</body>
</html>
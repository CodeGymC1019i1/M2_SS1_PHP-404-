<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height:250px; width:300px;
        margin:0;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input {
        padding:5px; margin:5px
    }
    input type=[text] , type=[password] {
        width: 200px;
        border: 1px solid black;
                             }
    input type=[submit]{
        border-radius: unset;
               }

</style>
<body>
<form>
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username"  placeholder="username" />
        <input type="password" name="password" placeholder="password" />
        <input type="submit" value="Sign in" formmethod="get"/>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "admin" && $password === "admin") {
            echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
        } else{
            echo "<h2><span style='color:red'>Login Error</span></h2>";
        }
    }
    ?>
</form>
</body>
</html>
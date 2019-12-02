<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin") {
        echo "<h2>Welcome" .$username. "</span> to website</h2>";
    } else{
        echo "<h2><span>Login Error</span></h2>";
    }
}
?>
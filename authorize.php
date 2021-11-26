<?php
require "./connection.php";

/* check data in database if exists catch them */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $erros = "false";
    $username = $_POST["username"];
    $userpassword = $_POST["userpassword"];
    $query = "SELECT * FROM users where username = ? ";
    $stmt = $connection->prepare($query);
    $stmt->bindValue(1, $username);
    $stmt->execute();
    $res = $stmt->fetch();

    /* check the userpassword and password_hash */
    if (password_verify($_POST["userpassword"], $res["userpassword"])) {
        $_SESSION["username"] = $res["username"];
        $_SESSION["id"] = $res["id"];
        header("location: /dashboard/index.php");
    } else {
        header("location: ./login.php?<?= $erros?>");
    }
}

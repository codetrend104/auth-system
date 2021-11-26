<?php
/* check all fileds are empty or not */
if (empty($_POST["username"]) || empty($_POST["userpassword"]) || empty($_POST["firstname"]) || empty($_POST["lastname"])) {
    header("location: register.php");
    return;
}

/* insert into database */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require "./connection.php";
    $username = $_POST["username"];
    $userpassword = $_POST["userpassword"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $query = "INSERT INTO users(username , userpassword , firstname , lastname)VALUES(? , ? , ? , ?)";
    $hashpassword = password_hash($_POST["userpassword"], PASSWORD_DEFAULT);
    $stmt = $connection->prepare($query);
    $stmt->bindValue(1, $username);
    $stmt->bindValue(2, $hashpassword);
    $stmt->bindValue(3, $firstname);
    $stmt->bindValue(4, $lastname);
    $stmt->execute();
    $_SESSION["username"] = $username;

    /* select data for catch id when user registered */
    $selectdata = "SELECT * FROM users WHERE username = ? ";
    $statment  = $connection->prepare($selectdata);
    $statment->bindValue(1, $_SESSION["username"]);
    $statment->execute();
    $res = $statment->fetch();
    $_SESSION["id"] = $res["id"];
    header("location: /dashboard/index.php");
}

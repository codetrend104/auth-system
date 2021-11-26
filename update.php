<?php
require "./connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $userpassword = $_POST["userpassword"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $hashpassword = password_hash($_POST["userpassword"], PASSWORD_DEFAULT);
    $query = "UPDATE users SET username = :username , firstname = :firstname , lastname = :lastname WHERE id = :id ";

    /* check fileld userpassword is empty or not */
    if (!empty($_POST["userpassword"])) {
        $query = "UPDATE users SET username = :username , userpassword = :userpassword , firstname = :firstname , lastname = :lastname WHERE id = :id ";
    }
    $stmt = $connection->prepare($query);
    $stmt->bindValue(":username", $username);

    /* if userpassword isnt empty catch hashpassword */
    if (!empty($_POST["userpassword"])) {
        $stmt->bindValue(":userpassword", $hashpassword);
    }
    $stmt->bindValue(":firstname", $firstname);
    $stmt->bindValue(":lastname", $lastname);
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    $_SESSION["username"] = $_POST["username"];
    header("location: /dashboard/userpages/users.php");
}

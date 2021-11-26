<?php
require "./connection.php";

/* add image file to uploads directory */
$path = "dashboard/uploads/";
$_FILES["profile"]["name"] . $_FILES["profile"]["type"];
$res = move_uploaded_file($_FILES["profile"]["tmp_name"], $path . basename($_FILES["profile"]["name"]));
$pic = $_FILES["profile"]["name"];

/* set imgSrc to database as src */
$query = "UPDATE users SET src = ? WHERE id = ? ";
$stmt = $connection->prepare($query);
$stmt->bindValue(1, $pic);
$stmt->bindValue(2, $_SESSION["id"]);
$stmt->execute();
header("location: /dashboard/userpages/profile.php");

<?php
/* check the session */
if (empty($_SESSION["username"])) {
    header("location: ../login.php");
}
?>
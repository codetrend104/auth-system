<?php
/* delete session when user logout and go login page */
session_start();
session_destroy();
header("location: ./login.php");

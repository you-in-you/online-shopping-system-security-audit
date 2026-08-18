<?php

$servername = "audit-db";
$username = "shop_user";
$password = "shoppassword";
$db = "onlineshop";


try {
    $con = @mysqli_connect($servername, $username, $password, $db);

    if (!$con) {
        throw new Exception(mysqli_connect_error());
    }

} catch (Throwable $e) {

    error_log("[" . date("Y-m-d H:i:s") . "] DB Connection Error: " . $e->getMessage());
    
    header("Location: error.php");
    exit();
}

?>
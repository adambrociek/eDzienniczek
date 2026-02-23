<?php 
session_start();

include('auth/token_login.php');
include('auth/db_connect.php');

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE) {
/**Nothing in here, if loggedin is true we continue */

} 

if (!isset($_COOKIE['token'])) {
    header('Location: login/');
    exit;
}elseif (!login_with_token($_COOKIE['token'], $conn)) {
        /**Assuming there's not loggedin session variable, we try to login using token */
        /**TODO: db user functionality, allowing users to login with token */
     header('Location: login/');
     exit;
     
     }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    <h1>Welcome, {user}</h1>
</body>
</html>
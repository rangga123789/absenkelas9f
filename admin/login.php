<?php

include "connection.php";
session_start();


if (isset($_SESSION['isLogin'])){
   header("Location: delete.php");
}
       

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $db->query($sql);
    if ($result->num_rows > 0){
        $data = $result->fetch_assoc();

        $_SESSION["username"] = $data["username"];
        $_SESSION["isLogin"] = true;

        header("Location: delete.php");
    }else{
        echo "data tidak ada";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php include"../layout/header.html" ?>
    <form action="login.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="username" id="" placeholder="username" required>
        <input type="password" name="password" id="" placeholder="password" required>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>
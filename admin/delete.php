<?php 
session_start();
if(isset($_SESSION['isLogin']) === false){
    header('location: login.php');
}
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>SELAMAT DATANG ADMIN <?= $_SESSION["username"]?></h1>
<?php include"../layout/header.html" ?>
    <div>
    <form action="delnumber.php" method="POST" enctype="multipart/form-data">
    <input 
    placeholder="reset berdasarkan no"
    type="text"
    name="absen">
    <button name="kirim">reset</button>
    </form>
    </div>

    <div>
    <form action="delall.php" method="POST" enctype="multipart/form-data">
    <h4>reset all</h4>
    <button name="all">reset</button>
    </form>
    </div>
    <a href="table.php"><h1>table</h1></a>
    <form action="delete.php" method="post" enctype="multipart/form-data">
        <button type="submit" name="logout">logout</button>
    </form>
</body>
</html>
<?php

require ('koneksi.php');

if(isset($_POST['register'])){
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_nama'];

    $query = "INSERT INTO user_detail VALUES ('','$userMail','$userPass','UserName','2'";
    $result = mysqli_query($koneksi, $query);
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
<form action="register.php" method="POST">
        <p>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email" required></p>
        <p>Password : <input type="password" name="txt_pass" required></p>
        <p>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text", name = "txt_nama" required>
        <br>
        <button type="submit" name="register">Register</button>
    </form>
    <p><a href="login.php">Login</p>
</body>
</html>
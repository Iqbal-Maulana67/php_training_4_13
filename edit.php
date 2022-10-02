<?php
require('koneksi.php');
if(isset($_POST['update'])){
    $userId = $_POST['txt_id'];
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_nama'];

    $query = "UPDATE user_detail SET user_password = '$userPass',user_fullname='$userName' WHERE id = '$userId'";
    echo $query;
    $result = mysqli_query($koneksi, $query);
    header('Location: home.php');
}
$id = $_GET['id'];
$query = "SELECT * FROM user_detail WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $userMail = $row['user_email'];
    $userPass = $row['user_password'];
    $userName = $row['user_fullname'];
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
        <button type="submit" name="update">Update</button>
    </form>
    <p><a href="home.php">Kembali</p>
</body>
</html>
<?php
require ("koneksi.php");
error_reporting(0);

$email = $_GET['user_fullname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <h1>Selamat Datanag <?php echo $email;?></h1>
    <table border='1'>
        <tr>
            <td>No</td>
            <td>Email</td>
            <td>Nama</td>
            <td></td>
        </tr>
        <?php 
            $query = "SELECT * FROM user_detail";
            $result = mysqli_query($koneksi, $query);
            $no = 1;
            while($row = mysqli_fetch_array($result)){
                $userMail = $row['user_email'];
                $userName = $row['user_fullname'];
            }
        ?>
        <tr>
            <td><?=$no;?></td>
            <td><?=$userMail;?></td>
            <td><?=$userName;?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']?>">Edit</a>
                <a href="hapus.php?id=<?= $row['id']?>">Hapus</a>
            </td>
        </tr>
        <?php
        $no++;
        ?>
    </table>
</body>
</html>
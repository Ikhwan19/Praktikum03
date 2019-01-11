<?php
$nis = $_POST['nis'];
$password = $_POST['pass'];

if ($nis == "" && $password == "")
 {
    header("location: login.php");
}
else
{
    echo "<script>alert ('Login berhasil')</script>";
    echo "<a href='logout.php'>logout</a>";
}
?>
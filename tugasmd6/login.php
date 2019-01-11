<?php
session_start();
include 'connect.php';

$nis = $_POST['nis'];
$password = $_POST['password'];

if ($nis == "" || $password == "")
{
  header("location: form-login.php");
}
else {
}

$query = "SELECT * FROM tb_siswa WHERE nis = '$nis' and password ='$password'";
$result =  mysqli_query($connect,$query);

$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "<script>
    alert('Login Berasil!!')
    </script>";
    echo "<h1><a href='logout.php'>logout!</a></h1>";
    $_SESSION['nis']=$nis;
}
else {
    echo "<script>
    alert('login Gagal')
    </script>";
    include 'form-login.php';
}
 
?>
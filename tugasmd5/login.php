<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
  <img src="BUKU2.jpg">
    <div class="loginBox">
      <img src=".jpg" class="user">
      <h1>Log In Here</h1>
  
    <form action = "variabel_hasil.php" method="post" onSubmit="validasi()">
Nis : <input type="number" name="nis" id="nis"> <br>
Password : <input type = "password" name ="pass" id="pass"> <br>
<input type = "submit" name ="submit" value = "Tampilkan">

  </div>
  </body>
  <script type="text/javascript">
    function validasi(){
      var nis = document.getElementById('nis').value;
    var pass = document.getElementById('pass').value;

    if (nis != "" && password != ""){
      return true;
    }
    else{
      alert ('isi form terlebih dahulu')
    }
    }
  </script>
</html>

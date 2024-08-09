<?php 
    session_start();
  include "koneksi.php";
  ?>

 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Sign In</title>
</head>
<body>
  <div class="login-container">
    <h1>Sign In</h1>
    <form method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit" name="masuk">Login</button>
    </form>

    <?php

     if (isset($_POST['masuk'])) {
      $username =$_POST['username'];
      $password =$_POST['password'];  

      $insert = mysqli_query($conn," SELECT * FROM tab_login WHERE username = '$username' AND password = md5('$password')");     
$cek = mysqli_num_rows($insert);
if ($cek==1) {
 
  header("Location: sukses.html");
  exit;
}

else{
  echo "maaf username dan password anda salah";
}

}

    ?>
  </div>
</body>
</html>



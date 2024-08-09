
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Sign Up</title>
</head>
<body>
  <div class="signup-container">
    <h1>Sign Up</h1>
    <form method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit" name="daftar">Sign Up</button>
    </form>
  </div>
</body>
</html>

<?php
include "koneksi.php";

if (isset($_POST['daftar'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  
  $hashPassword = md5($password);

 
  $query = "INSERT INTO tab_login (username, password) VALUES ('$username', '$hashPassword')";

  if (mysqli_query($conn, $query)) {
    header("Location: login.php");
    exit;
  } else {
    echo "Pendaftaran gagal. Silakan coba lagi.";
  }
}
?>


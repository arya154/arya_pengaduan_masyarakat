<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>LOGIN</title>
</head>
<body>
 
    <div class="container">
        <form action="masyarakat/index.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
            <span><input type="nik" placeholder="Nik" name="nik" required></span>
            </div>
            <div class="input-group">
            <span><input type="username" placeholder="Admin/User" name="username" required></span>
            </div>
            <div class="input-group">
            <span><input type="password" placeholder="Password" name="password" required></span>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text" align="center">Belum punya akun?<a href="register.php">Register</a></p>
            <p class="login-register-text" align="center">buat akun petugas?<a href="register_petugas.php">Register</a></p>
        </form>
    </div>
</body>
</html>
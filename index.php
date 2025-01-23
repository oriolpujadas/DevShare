<?php
session_start();
//require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    // $stmt->execute(['username' => $username]);
    // $user = $stmt->fetch();

    // if ($user && password_verify($password, $user['password'])) {
    //     $_SESSION['user_id'] = $user['id'];
    //     $_SESSION['username'] = $user['username'];
    //     header("Location: home.php");
    //     exit;
    // } else {
    //     $error = "Username or password not correct";
    // }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<body>
    <div class="navbar">
        <div class="logo-container">
            <h2>DevShare</h2>
        </div>
    </div>
    <h2>LOGIN</h2>
    <form method="POST" action="home.php">
        <label>Username</label>
        <input type="text" name="username" placeholder="user or email" required>
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <p>¿Don't have an account? <a href="register.php">Sign up</a></p>
</body>
</html>

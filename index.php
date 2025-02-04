<?php
session_start();

// Configurar conexión a la base de datos
$servername = "localhost";
$username_db = "root"; // Cambia esto si tienes otro usuario
$password_db = ""; // Cambia esto si tienes una contraseña
$dbname = "devshare"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT * FROM usuari WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verify the password
    if ($user && $password === $user['contraseña']) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: home.php");
        exit;
    } else {
        $error = "Username or password not correct";
    }
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
    <form method="POST" action="">
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

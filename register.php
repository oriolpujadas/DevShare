<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<body>
    <h2>SIGN UP</h2>
    <form method="POST" action="register.php">
        <label>Username:</label>
        <input type="text" name="username" placeholder="username" required>
        <br>
        <label>Email:</label>
        <input type="text" name="email" placeholder="email" required>
        <br>
        <label>First Name:</label>
        <input type="text" name="firstname" placeholder="firstname" required>
        <br>
        <label>Last name:</label>
        <input type="text" name="lastname" placeholder="lastname" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" placeholder="password" required>
        <br>
        <label>Verify Password:</label>
        <input type="password" name="verify_password" placeholder="password" required>
        <br>
        <button type="submit">Sign Up</button>
    </form>
    <?php
    // Verificar si se envió el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {


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

        // Recoger datos del formulario
        $username = $_POST['username'];
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $contraseña = $_POST['password'];
        $verify_password = $_POST['verify_password'];

        // Verificar que las contraseñas coincidan
        if ($contraseña !== $verify_password) {
            echo "<p style='color: red;'>Las contraseñas no coinciden. Inténtalo de nuevo.</p>";
        } else {
            // Encriptar la contraseña
           // $hashed_password = password_hash($contraseña, PASSWORD_DEFAULT);

            // Preparar consulta SQL para insertar datos
            $stmt = $conn->prepare("INSERT INTO usuari (username, email, firstName, lastName, contraseña) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $username, $email, $firstname, $lastname, $contraseña);

            // Ejecutar consulta y verificar si tuvo éxito
            if ($stmt->execute()) {
                echo "<p style='color: green;'>Usuario registrado exitosamente.</p>";
                echo '<button style="background-color: #4CAF50; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border: none; border-radius: 4px;"><a href="./index.php" style="color: white; text-decoration: none;">Login</a></button>';            } else {
                echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
            }

            // Cerrar la consulta
            $stmt->close();
        }

        // Cerrar conexión
        $conn->close();
    }
    ?>
</body>
</html>
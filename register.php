


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</U></title>
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<body>
    <h2>SIGN UP</h2>
    <form method="POST" action="index.php">
        <label>Username:</label>
        <input type="text" name="username" placeholder="username" required>
        <br>
        <label>Email:</label>
        <input type="text" name="email" placeholder="email" required>
        <br>
        <label>First Name:</label>
        <input type="text" name="firstname" placeholder="username" required>
        <br>
        <label>Last name:</label>
        <input type="text" name="lastname" placeholder="username" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" placeholder ="password" required>
        <br>
        <label>Verify Password:</label>
        <input type="password" name="password" placeholder ="password" required>
        <br>
        <button type="submit">Sign Up</button>
    </form>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
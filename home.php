<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevShare - Home</title>
    <link rel="stylesheet" href="./CSS/home.css">
</head>
<body>
    <!-- Encabezado -->
    <header>
        <div class="logo">DevShare</div>
        <nav>
            <ul>
                <li><a href="./home.php">Inicio</a></li>
                <li><a href="#">Perfil</a></li>
                <li><a href="./preguntas.php">Preguntas</a></li>
                <li><a href="./logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección Principal -->
    <main>
        <div class="welcome-box">
            <h1>Bienvenido a DevShare</h1>
            <p>Conecta con desarrolladores, resuelve dudas y crece profesionalmente.</p>
            <div class="buttons">
                <button onclick="location.href='./preguntas.php'">Hacer una Pregunta</button>
                <button onclick="location.href='view_questions.html'">Ver Preguntas</button>
                <button onclick="location.href='profile.html'">Mi Perfil</button>
            </div>
        </div>
    </main>

    <!-- Pie de Página -->
    <footer>
        <p>&copy; 2025 DevShare. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

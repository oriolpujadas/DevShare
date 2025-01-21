<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $question = $_POST['question'];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Comunidad</title>
    <link rel="stylesheet" href="./CSS/preguntas.css">
</head>
<body>
    <!-- Barra de navegación -->
    <div class="navbar">
        <div class="logo-container">
            <h2>DevShare</h2>
        </div>
        <div class="nav-links">
            <a href="./home.php">Inicio</a>
            <a href="#">Perfil</a>
            <a href="#">Preguntas</a>
            <a href="./logout.php">Cerrar Sesión</a>
        </div>
    </div>

    <!-- Contenido de la comunidad -->
    <div class="comunidad-container">       
        <h2>Comunidad - Haz tu pregunta</h2>
        <form method="POST" action="./preguntas.php">
            <label for="question">Escribe tu pregunta:</label>
            <textarea name="question" id="question" rows="3" placeholder="Escribe aquí tu pregunta..." required></textarea>
            <button type="submit">Publicar</button>
        </form>

        <!-- Área de preguntas -->
        <div class="questions">
            <h3>Preguntas recientes:</h3>
            <ul>
                <li><strong>Usuario 1:</strong> ¿Cómo puedo mejorar mi código PHP?</li>
                <li><strong>Usuario 2:</strong> ¿Qué es una base de datos relacional?</li>
                <li><strong>Usuario 3:</strong> ¿Dónde puedo aprender CSS avanzado?</li>
            </ul>
        </div>
    </div>
</body>
</html>
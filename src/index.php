<?php
$host = 'db';
$dbname = 'hola_mundo';
$username = 'appuser';
$password = 'app_password';

$mensaje = '';
$error = '';

try {
    $conexion = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    $consulta = $conexion->query(
        "SELECT '¡Hola Mundo!' AS mensaje, NOW() AS fecha"
    );

    $resultado = $consulta->fetch();
    $mensaje = $resultado['mensaje'];
    $fecha = $resultado['fecha'];

} catch (PDOException $e) {
    http_response_code(500);
    $error = 'No se pudo conectar con la base de datos.';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo con MySQL</title>
</head>
<body>
    <h1>Aplicación web Hola Mundo</h1>

    <?php if ($error): ?>
        <p><?= htmlspecialchars($error) ?></p>
    <?php else: ?>
        <h2><?= htmlspecialchars($mensaje) ?></h2>
        <p>Conexión a MySQL establecida correctamente.</p>
        <p>Fecha obtenida desde MySQL:
            <?= htmlspecialchars($fecha) ?>
        </p>
    <?php endif; ?>
</body>
</html>

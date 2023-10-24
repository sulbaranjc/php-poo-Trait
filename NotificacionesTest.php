<?php
// carga de datos
require_once 'BaseNotificable.php';
require_once 'NotificableTrait.php';
require_once 'Usuario.php';
require_once 'Publicacion.php';

$usuario1 = new Usuario();
$usuario1->notificarUsuario("Hola, Soy un usuario");
$usuario1->notificarUsuario("Hola, Soy Otro usuario");
$usuario1->notificarUsuario("Hola, Soy Otro+ usuario");

$publicacion = new Publicacion();
$publicacion->notificarPublicacion("Hola, soy una publicación ");
$publicacion->notificarPublicacion("Hola, soy otra publicación ");
$publicacion->notificarPublicacion("Hola, soy otra+ publicación ");
// fin de carga de datos
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notificaciones</title>

    <!-- CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD5tr5Szkbe5P/SFIIJdA2ybp" crossorigin="anonymous">
</head>
<body class="container mt-5">
    <h2>Sistema de Notificaciones</h2>

    <h4 class="mb-3">Registro de Notificaciones:</h4>
    <ul class="list-group">
        <?php
        // Utilizando el método obtenerRegistroNotificaciones para acceder al registro.
        foreach (BaseNotificable::obtenerRegistroNotificaciones() as $notificacion) {
            echo "<li class='list-group-item'>$notificacion</li>";
        }
        ?>
    </ul>

    <!-- Scripts de Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0v8FqFjcJ6pajs/rfdfs3SO+kD5tr5Szkbe5P/SFIIJdA2ybp" crossorigin="anonymous"></script>
</body>
</html>

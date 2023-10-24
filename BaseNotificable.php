<?php

class BaseNotificable {
    // Usamos una propiedad estática para almacenar todas las notificaciones
    protected static $registroNotificaciones = [];

    public static function obtenerRegistroNotificaciones() {
        return self::$registroNotificaciones;
    }
}
?>
<?php

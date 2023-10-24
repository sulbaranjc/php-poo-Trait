<?php

trait Notificable {
    private function registrarNotificacion($mensaje) {
        self::$registroNotificaciones[] = $mensaje;
        // Mostrar por pantalla el contenido del arreglo
        // echo "<pre>" . print_r(self::$registroNotificaciones, true) . "</pre>";
    }

    public function enviarNotificacion($mensaje) {
        $this->registrarNotificacion($mensaje);
    }
}
?>


<?php
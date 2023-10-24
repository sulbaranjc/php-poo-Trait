<?php

require_once 'BaseNotificable.php';
require_once 'NotificableTrait.php';

class Publicacion extends BaseNotificable {
    use Notificable;

    public function notificarPublicacion($mensaje) {
        $this->enviarNotificacion("Notificación de publicación: $mensaje");
    }
}
?>

<?php
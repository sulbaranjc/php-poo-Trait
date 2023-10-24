<?php

require_once 'BaseNotificable.php';
require_once 'NotificableTrait.php';

class Usuario extends BaseNotificable {
    use Notificable;

    public function notificarUsuario($mensaje) {
        $this->enviarNotificacion("Notificación del usuario: $mensaje");
    }
}
?>

<?php


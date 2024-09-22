<?php

// Receiver (Receptor): Es el objeto que realiza la acción real. Los comandos no hacen el trabajo directamente, sino que delegan al receptor.

namespace Receivers;

class OrderReceiver {
    public function create() {
        echo "Creando pedido...\n";
    }

    public function cancel() {
        echo "Cancelando pedido...\n";
    }

    public function resend() {
        echo "Reenviando pedido...\n";
    }
}

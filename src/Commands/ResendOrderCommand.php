<?php

// ConcreteCommand (Comando Concreto): Implementa la interfaz Command. En esta clase, se define la lógica de qué acciones tomar al ejecutar un comando.

namespace Commands;

use Receivers\OrderReceiver;

class ResendOrderCommand implements CommandInterface {
    protected $order;

    public function __construct(OrderReceiver $order) {
        $this->order = $order;
    }

    public function execute() {
        $this->order->resend();
    }

    public function undo() {
      // La acción inversa de reenviar no siempre es clara, pero en este ejemplo, la cancelamos
      $this->order->cancel();
  }
}

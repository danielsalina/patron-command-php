<?php

// ConcreteCommand (Comando Concreto): Implementa la interfaz Command. En esta clase, se define la lógica de qué acciones tomar al ejecutar un comando.

namespace Commands;

use Receivers\OrderReceiver;

class CreateOrderCommand implements CommandInterface {
    protected $order;

    public function __construct(OrderReceiver $order) {
        $this->order = $order;
    }

    public function execute() {
        $this->order->create();
    }

    public function undo() {
      // La acción inversa de crear un pedido sería cancelarlo
      $this->order->cancel();
  }
}
<?php

// Client (Cliente): Es el responsable de crear instancias de los comandos concretos y asignarles los receptores adecuados.

require_once 'vendor/autoload.php';

use Receivers\OrderReceiver;
use Commands\CreateOrderCommand;
use Commands\CancelOrderCommand;
use Commands\ResendOrderCommand;
use Invokers\OrderInvoker;

// Crear el receptor y el invocador
$order = new OrderReceiver();
$invoker = new OrderInvoker();

// Crear y ejecutar comandos
$createOrder = new CreateOrderCommand($order);
$cancelOrder = new CancelOrderCommand($order);
$resendOrder = new ResendOrderCommand($order);

$invoker->addCommand($createOrder);
$invoker->addCommand($cancelOrder);
// $invoker->addCommand($resendOrder);

$invoker->executeCommands();

// Deshacer el último comando (cancelar pedido)
$invoker->undoLastCommand();  // Esto "desharía" la cancelación, lo que recrearía el pedido

// Deshacer el siguiente comando (crear pedido)
// $invoker->undoLastCommand();  // Esto desharía la creación del pedido

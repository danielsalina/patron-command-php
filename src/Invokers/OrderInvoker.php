<?php

// Invoker (Invocador): Es el responsable de llamar al método execute() del comando. No sabe qué hace el comando en detalle, solo lo invoca.
namespace Invokers;

use Commands\CommandInterface;

class OrderInvoker {
    protected $commands = [];
    protected $history = [];  // Almacena el historial de comandos ejecutados

    public function addCommand(CommandInterface $command) {
        $this->commands[] = $command;
    }

    public function executeCommands() {
        foreach ($this->commands as $command) {
            $command->execute();
            $this->history[] = $command;  // Guardamos el comando en el historial
        }
        // Limpiar lista después de ejecución
        $this->commands = [];
    }

    // Método para deshacer el último comando
    public function undoLastCommand() {
        if (!empty($this->history)) {
            $command = array_pop($this->history);  // Tomamos el último comando del historial
            $command->undo();  // Ejecutamos la operación de deshacer
        } else {
            echo "No hay comandos para deshacer.\n";
        }
    }
}



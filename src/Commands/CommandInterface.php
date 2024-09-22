<?php

// Command (Comando): Es una interfaz o clase abstracta que define el método execute(), el cual ejecuta una acción. Puede incluir un método undo() para revertir la acción.

namespace Commands;

interface CommandInterface {
    public function execute();
    public function undo();  // Nuevo método para deshacer la acción

}

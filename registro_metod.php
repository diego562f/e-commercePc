<?php

class usuarios {
    private $id;
    private $nombre;
    private $clave;
    private $correo;

    public function __construct($id, $nombre, $clave, $correo) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->clave = $clave;
        $this->correo = $correo;
    }

    public function crearUsuario($conn) {
        $stmt = $conn->prepare("INSERT INTO usuarios(nombre, clave, correo) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $this->nombre, $this->clave, $this->correo);

        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }
}

?>

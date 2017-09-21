<?php
    class conexion{
        private $server = "localhost";  // Nombre del servidor.
        private $user   = "root";       // Usuario.
        private $pass   = "";           // Contraseña.
        private $db     = "umat-ferias";   // Nombre base de datos.
        private $mysqli;                // Conexión.

        public function __construct() {
          $this -> mysqli = new mysqli ($this->server, $this->user, $this->pass, $this->db);
            if ($this-> mysqli -> connect_errno) {
                  echo "Error en la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            //La transaccion de informacion se codificara en UTF8
            mysqli_set_charset($this->mysqli,"utf8");
        }

        public function insertarAlumno($nombre, $apellidos, $telefono, $correo, $facebook, $licenciatura, $bachillerato, $semestre){
            if (!( $sentencia = $this-> mysqli-> prepare ("INSERT INTO alumnos (Nombre, Apellidos, Telefono, Correo, Facebook, Licenciatura, Bachillerato, Semestre)
            VALUES (?,?,?,?,?,?,?,?) "))) {
                echo "Fallo la preparacion: (". $mysqli-> errno . ")";
            }
            $id = 1;
            if (! $sentencia-> bind_param ("ssssssss",$nombre, $apellidos, $telefono, $correo, $facebook, $licenciatura, $bachillerato, $semestre)) {
                echo "Falló la vinculacion de parámetros : (" . $sentencia-> errno .")" . $sentencia-> error;
            }
            if (!$sentencia-> execute()) {
              echo "Falló la ejecución: (". $sentencia-> errno .")";
            }
        }
    }
?>

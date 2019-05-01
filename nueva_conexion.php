<?php

    class conexion
    {
        private $servidor;
        private $usuario;
        private $contraseña;
        private $basedatos;
        public $conexion;
        
        public function __construct()
        {
            $this->servidor = "mysql.hostinger.com.ar";
            $this->usuario = "u456209797_low";
            $this->contraseña = "trivium12";
            $this->basedatos = "u456209797_libre";
            
        }
        
        function conectar()
        {
            $this->conexion = new mysqli($this-> servidor, $this->usuario, $this->contraseña, $this->basedatos);
        }
        
        function cerrar()
        {
            $this->conexion->close();
        }
    }
?>
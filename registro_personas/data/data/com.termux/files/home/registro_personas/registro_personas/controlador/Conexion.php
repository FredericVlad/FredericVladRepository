<?php
class Conexion {
	    private $host = "127.0.0.1";
	        private $db = "registro_mvc";
	        private $user = "Masapanta";
		    private $pass = "admin";
		    public $conn;

		        public function conectar() {
				        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
					        if ($this->conn->connect_error) {
							            die("Conexión fallida: " . $this->conn->connect_error);
								            }
					        return $this->conn;
					    }
}
?>

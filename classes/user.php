<?php
  require_once('modeldb.php');

    class usuario extends modeloCredencialesDB {
        public function __construct() {
            parent:: __construct();
        }
  
        public function validar_usuario($usrn,$pswd) {
            $instruccion = "CALL sp_validar_usuario('".$usrn."','".$pswd."')";
            $consulta=$this->__db->query($instruccion);
            $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
      
            if ($resultado) {
                return $resultado;
                $resultado->close();
                $this->__db->close();
            }
        }
        //HACER EL SP PARA ESTA FUNCIÓN
        public function datos_usuario($usrn) {
            $instruccion = "CALL sp_select_datos_usuario('".$usrn."')";
            $consulta=$this->__db->query($instruccion);
            $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
    
            if ($resultado) {
                return $resultado;
                $resultado->close();
                $this->__db->close();
            }
        }
    }  
?>
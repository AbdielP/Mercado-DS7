<?php
  require_once('modeldb.php');

  class oferta extends modeloCredencialesDB {
      public function __construct() {
          parent:: __construct();
      }
  
      public function get_ofertas_codigo($codigo) {
          $instruccion = "CALL sp_ofertas_codigo_select('".$codigo."')";
          $consulta=$this->__db->query($instruccion);
          $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
      
          if ($resultado) {
              return $resultado;
              $resultado->close();
              $this->__db->close();
          }
      }
      
      public function get_ofertas_usuario($correo) {
        $instruccion = "CALL sp_select_ofertas_usuario('".$correo."')";
        $consulta=$this->__db->query($instruccion);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
    
        if ($resultado) {
            return $resultado;
            $resultado->close();
            $this->__db->close();
        }
      }   

      public function insert_oferta($idprod, $idprdtr, $precio, $qty, $unt, $descrp) {
        $message = "Oferta generada exitosamente en el sistema.";
        try {
            $instruccion = "CALL sp_insert_oferta('".$idprod."','".$idprdtr."','".$precio."','".$qty."','".$unt."','".$descrp."')";
            $query = $this->__db->query($instruccion);
            return $message;
            $query->close();
            $this->__db->close();
        } catch (\Throwable $th) {
            $query->close();
            $this->__db->close();
            return $message = "Error insertando oferta en la base de datos. $th";
        }
      }
  }  
?>
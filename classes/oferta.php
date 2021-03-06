<?php
  require_once('modeldb.php');

  class oferta extends modeloCredencialesDB {
      public function __construct() {
        parent:: __construct();
      }
  
      public function get_ofertas_codigo($codigo) {
        $instruccion = "CALL sp_select_ofertas_codigo('".$codigo."')";
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

      public function get_oferta($id) {
        $instruccion = "CALL sp_select_oferta('".$id."')";
        $consulta=$this->__db->query($instruccion);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
    
        if ($resultado) {
          return $resultado;
          $resultado->close();
          $this->__db->close();
        }
      }
      // ESTADISTICAS DE OFERTAS ------------------------------------------
      // OFERTA MÁS RECIENTE 
      public function get_oferta_max() {
        $instruccion = "CALL sp_select_max_oferta()";
        $consulta=$this->__db->query($instruccion);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
    
        if ($resultado) {
          return $resultado;
          $resultado->close();
          $this->__db->close();
        }
      }
      // OFERTA MÁS ALTA(PRECIO) 
      public function get_oferta_precio_max() {
        $instruccion = "CALL sp_select_max_precio_oferta()";
        $consulta=$this->__db->query($instruccion);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
    
        if ($resultado) {
          return $resultado;
          $resultado->close();
          $this->__db->close();
        }
      }

      // OFERTA MÁS BAJA(PRECIO) 
      public function get_oferta_precio_min() {
        $instruccion = "CALL sp_select_min_precio_oferta()";
        $consulta=$this->__db->query($instruccion);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
    
        if ($resultado) {
          return $resultado;
          $resultado->close();
          $this->__db->close();
        }
      }

      public function insert_oferta($idprod, $idprdtr, $precio, $qty, $unt, $descrp) {
        $message = "Oferta generada éxitosamente en el sistema.";
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
    
    public function update_oferta($idofert, $idprod, $precio, $qty, $unt, $desc) {
      try {
        $instruccion = "CALL sp_update_oferta('".$idofert."','".$idprod."','".$precio."','".$qty."','".$unt."','".$desc."')";
        $query = $this->__db->query($instruccion);
        $query->close();
        $this->__db->close();
        return true;
      } catch (\Throwable $th) {
          return false;
      }
    }

    public function remover_oferta($idofert) {
      try {
        $instruccion = "CALL sp_update_remover_oferta('".$idofert."')";
        $query = $this->__db->query($instruccion);
        $query->close();
        $this->__db->close();
        return true;
      } catch (\Throwable $th) {
          return false;
      }
    }
  }  
?>
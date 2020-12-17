<?php
  require_once('modeldb.php');

  class producto extends modeloCredencialesDB {
      public function __construct() {
          parent:: __construct();
      }
  
      public function get_productos() {
          $instruccion = "CALL sp_select_productos()";
          $consulta=$this->__db->query($instruccion);
          $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
      
          if ($resultado) {
              return $resultado;
              $resultado->close();
              $this->__db->close();
          }
      }

      public function get_estadisticas() {
        $instruccion = "CALL sp_select_estadisticas()";
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
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
  }  
?>
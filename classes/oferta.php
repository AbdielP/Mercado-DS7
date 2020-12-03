<?php
  require_once('modeldb.php');

  class oferta extends modeloCredencialesDB {
      public function __construct() {
          parent:: __construct();
      }
  
      public function get_ofertas() {
          $instruccion = "CALL sp_ofertas_select()";
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
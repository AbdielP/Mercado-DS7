<?php
  require_once('modeldb.php');

  class producto extends modeloCredencialesDB {
      public function __construct() {
          parent:: __construct();
      }
  
      public function get_productos() {
          $instruccion = "CALL sp_productos_select()";
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
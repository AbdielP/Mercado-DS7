<?php
  require_once('modelo.php');

  class usuario extends modeloCredencialesDB {
      public function __construct() {
          parent:: __construct();
      }
  
      public function validar_usuario($usr,$pwd) {
          $instruccion = "CALL sp_validar_usuario('".$usr."','".$pwd."')";
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
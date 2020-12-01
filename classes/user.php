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
  }  
?>
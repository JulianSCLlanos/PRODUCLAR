<?php
class sesion {
  function __construct() {
     session_start ();
  }
 
  
    
  
  public function set($nombre, $valor, $id) {
  
    $_SESSION [$nombre] = $valor;
	  $_SESSION['pw'] = $pw;
	  $_SESSION['nivel'] = $tipo;
	  $_SESSION['id_user'] = $id;
  }
  public function get($nombre) {
     if (isset ( $_SESSION [$nombre] )) {
        return $_SESSION [$nombre];
     } else {
      echo "<p class='error'>*Ingrese un nombre</p>";
         return false;
     }
  }
  public function elimina_variable($nombre) {
      unset ( $_SESSION [$nombre] );
  }
  public function termina_sesion() {
      $_SESSION = array();
      session_destroy ();
  }
}
  
?>
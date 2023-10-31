<?php
  setcookie("usuario", $_POST["usuario"], time() + 60 * 60 * 24 * 90);
  //"Setea una cookie de usuario con el valor recibido de POST y redirige a la página principal, lo que actualiza la página con la nueva cookie."
  header("Location: index.php");
?>
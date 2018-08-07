<?php 
include ('templates/head.php')
?>

<h1 class="login-titulo"> Formulario Login</h1>
<form action="" class="login">

<h2 class="titulo"> Ingresar</h2>
<div class="contenedor-inputs">
  
  <input type="email" name="correo" placeholder="Correo electronico" class="input-100 input-for" required>
  
  <input type="password" name="password" placeholder="Contraseña" class="input-100 input-for" required>

  <input type="submit" value="Ingresar" class="btn-ingresar">

</div>

</form>


<?php 
include ('templates/foot.php')
?>



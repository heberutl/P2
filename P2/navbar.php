<?php
// Verificar si se ha enviado una solicitud de cierre de sesión
if(isset($_POST['logout'])) {
    // Realizar cualquier acción necesaria para cerrar la sesión, como destruir variables de sesión, etc.
    // Luego, redirigir al usuario a la página de inicio de sesión
    header("Location: ../login.php");
    exit; // Asegúrate de salir del script después de redirigir
}
?>
<php>  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid" >           
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../inicio.php">INICIO</a>
          </li>
        <li class="nav-item">
          <a class="nav-link active" href="../clientes/index.php">CLIENTES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../personas/index.php">PERSONAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../sucursales/index.php">SUCURSALES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../perfiles/index.php">PERFILES</a>
        </li>         
      </ul>
    </div> 
  </div>    
  <form method="post" style="margin: 0;" >
    <button type="submit" name="logout" class="btn btn-outline-light">SALIR</button>
  </form>
</nav>
</php>



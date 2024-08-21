<?php
    include("controller/controller_perfil.php");
    include("php/conexion.php");

    session_start();
//para poder mostrar los datos registrados del user
    $user = $_SESSION['usuario']; 

    $sql = "SELECT full_name, Email, username, password FROM usuarios WHERE username = '$user'";
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_assoc();

// Verificar la conexión

// Recoger datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $txt_Nombre = $_POST["txt_Nombre"];
  $txt_email = $_POST["txt_email"];
  $txt_user = $_POST["txt_user"];
  $txt_password = $_POST["txt_password"];
  
  // Actualizar los datos del usuario en la base de datos
  $query  = "UPDATE usuarios SET full_name = '$txt_Nombre', Email = '$txt_email', password = '$txt_password' WHERE username = '$user'";
  

    if (mysqli_query($conexion, $query)) {
      //header('Location: users-profile.php');
      echo '
            <script>
                alert("Actualizacion Exitosa.");
                window.location = "users-profile.php";
            </script>
        ';
      exit;
      } else {
          echo "Error al actualizar los datos: " . mysqli_error($conexion);
      }
}
  
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <link href="css/new_style.css" rel="stylesheet" />
  <title>Perfil User</title>

</head>

<body  class="bg-white  justify-content-center align-items-center ">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a href="#" class="navbar-brand">
        <span class="text-primary"> Eat</span>Booking
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
        aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarS">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="menu.php" class="nav-link">Inicio</a>
          </li>
          <a href="#" class="nav-link">Bienvenido: <?php echo  $_SESSION['usuario']?></a> 
          <li class="nav-item">
            <a href="index.php" class="nav-link">Cerrar sesion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="container rounded bg-white mt-1 mb-1">
    <div class="row">
      <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
            width="150px"
            src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
            class="font-weight-bold"><?php echo  utf8_decode($row['full_name']); ?></span><span class="text-black-50"></span><span> </span>
        </div>
      </div>
        <div class="col-md-5 border-right">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <br><br><br>
              <h4 class="text-right">Datos de su Registro</h4>
            </div>
            <form method ="POST" id="miform">
              
              <div class="col-md-6">
                <label class="labels" for="txt_Nombre">Full Name</label>
                <input type="text" class="form-control"
                value="<?php echo utf8_decode($row['full_name']);?>"
                placeholder="" 
                name = "txt_Nombre">
              </div><br>

              <div class="col-md-6">
                <label class="labels" for="txt_email">Email</label>
                <input type="text" class="form-control"  
                placeholder="" 
                value="<?php echo  utf8_decode($row['Email']);?>"
                name = "txt_email">
              </div><br>

              <div class="col-md-6">
                <label class="labels" >User Name</label><br>
                <label class="useri"><?php echo  $_SESSION['usuario']?></label>
              </div><br>

              <div class="col-md-6">
                <label class="labels" for = "txt_password">Password</label>
                <input type="password" class="form-control" 
                placeholder="" 
                value = "<?php echo  $_SESSION['contra']?>"
                name = "txt_password">
              </div><br>
              <input type="submit" value="Guardar Cambios" onclick="window.alert('Datos Actualizados correctamente')">
            </form>
          </div>
        </div>
    </div>
  </div>
  </div>
  </div>

  <footer class="footer bg-light" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
        
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2023. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item me-4">
              <a href="#!"><i class="bi-facebook fs-3"></i></a>
            </li>
            <li class="list-inline-item me-4">
              <a href="https://twitter.com/imessi"><i class="bi-twitter fs-3"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/leomessi/"><i class="bi-instagram fs-3"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
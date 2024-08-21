

<?php
    include 'conexion.php';
    session_start();
    
    $full_name = $_POST['full_name'];
    $Email = $_POST['Email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO usuarios(full_name, Email, username, password) 
              VALUES ('$full_name', '$Email', '$username', '$password')";
   
    //verificar que el correo no se repita
    $verificar_Email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Email = '$Email' ");
    
    
    if(mysqli_num_rows($verificar_Email) > 0){

        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro");
                window.location = "../regitro.php";
            </script>
        ';
        exit();
    }

    //verificar que el usuario no se repita
    $verificar_username = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username='$username'");

    if(mysqli_num_rows($verificar_username) > 0){
        echo '
            <script>
                alert("Este Usuario ya esta registrado, intenta con otro");
                window.location = "../regitro.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        
        echo '
            <script>
                alert("Registro correcto");
                window.location = "../login.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("intente mas tarde, no registrado");
                window.location = "../login.php";
            </script>
        ';
    }

    mysqli_close($conexion);

?>
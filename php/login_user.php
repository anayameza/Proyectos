

<?php
    include 'conexion.php';

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username = '$username'
    and password = '$password'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $username;
        $_SESSION['contra'] = $password;
        
        header("location: ../menu.php");


        exit;
    }else{
        echo'
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../login.php";
            </script>
        ';
        exit;
    }


?>
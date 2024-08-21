<?php

if (!empty($_POST["bt_modificar"])) {
    if(!empty($_POST["txt_Nombre"]) and !empty($_POST["txt_email"]) and !empty($_POST["txt_user"]) and !empty($_POST["txt_password"])) {
        $nom = $_POST["txt_Nombre"];
        $corre = $_POST["txt_email"];
        $usu = $_POST["txt_user"];
        $contra = $_POST["txt_password"];

        $sql = $conexion->query("update usuarios set full_name='$nom', Email='$corre', password='$contra' Where username=$usu ");
        if ($sql == true){ ?>
            <script>
                $(function notificacion(){
                    new PNotify({
                        title: "CORRECTO",
                        type: "success",
                        text: "Datos modificados correctamente",
                        styling: "bootstrap3"
                    })
                })
            </script>
        <?php }else{ ?>  
            <script>
                $(function notificacion(){
                    new PNotify({
                        title: "INCORRECTO",
                        type: "error",
                        text: "error al modificar los datos",
                        styling: "bootstrap3"
                    })
                })
            </script>
        <?php }

    } else { ?>
        <script>
            $(function notificacion(){
                new PNotify({
                    title: "INCORRECTO",
                    type: "error",
                    text: "los campos estan vacios",
                    styling: "bootstrap3"
                })
            })
        </script>
<?php }
}

?>
<?php
session_start();
include ("conexiones1.php");

if (isset($_POST['usuario']) && isset($_POST['clave'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    $nombre= validate($_POST['usuario']);
    $clave= validate($_POST['clave']);
    
    if (empty($nombre)){
        header("location: inicio_de_secion?error=El usuario es requerido");
        exit();
    }elseif(empty($clave)){
        header("location: inicio_de_secion?error=La contraseña es requerida");
        exit();
    }else{
        
        //$clave= md5($clave);

        $sql= "SELECT * FROM usuarios WHERE usuario='$nombre' AND clave='$clave'";
        $resul= mysqli_query($conexion,$sql);

        if(mysqli_num_rows($resul)===1){
            $row= mysqli_fetch_assoc($resul);
            if($row['usuario']===$nombre && $row['clave']===$clave){
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['id'] =$row['id'];
                $_SESSION['id_cargo'] = $row['id_cargo']; // Agregamos la sesión para el rol

                        // Redireccionamos según el rol
                switch ($_SESSION['id_cargo']) {
                    case '1':
                        echo 'usted es administrador';
                        header("location: Empleados.php");
                        break;
                    case '2':
                        echo 'usted es nuestro cliente';
                        header("location: clientes.php");
                        break;
                    default:
                        header("location: inicio_de_secion.php?error=Rol no válido");
                 }
                exit();
            }else{
                header("location: inicio_de_secion.php?error=El usuario o la contraseña son incorrectas");
                exit();
            }

        }else{
            header("location: inicio_de_secion.php?error=La clave o el usuario son incorrectos");
            exit();
        }


    }
}else{
    header("location: inicio_de_secion.php?error=La clave o el usuario son incorrectos");
    exit();
}
?>


<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1 class="text-center">Hello World</h1>
        <div class="col-md-3"></div>
        <form action="" method="POST">
        <div class="col-md-6">
            <center>
                
                <input type="text" name="usuario" id="usuario" class="form-control" value="" required="required" placeholder="Usuario">
             <br><input type="text" name="pass" id="pass" class="form-control" value="" required="required" placeholder="Contraseña">
            <br><input name="btnIngresar" id="btnIngresar" class="btn btn-primary" type="submit" value="Enviar">
            </center>
            </div>
        </form>
        <div class="col-md-3"></div>
       
        <?php
            session_start();
            $conexion = mysqli_connect("localhost","root","","store") or die($conexion->error);
            $usuario = $conexion->escape_string($_POST['usuario']);
            $contra = $conexion->escape_string($_POST['pass']);
            $btnAccion = $_POST['btnIngresar'];
            
            if (isset($btnAccion)) {
                $query = "SELECT * FROM usuario where email ='$usuario' and passworda = '$contra'";
                $result = mysqli_query($conexion,$query) or die ($conexion->error);
                while ($row = $result->fetch_assoc()) {
                    if ($row['email']==$usuario && $row['passworda']==$contra) {
                        $_SESSION['usuario'] = array('ID'=>$row['id'], 'USUARIO'=>$usuario);
                       
                        header('Location: prueba.php');
                    }else{
                        echo "<script>alert('Error nne');</script>";
                    }
                }
            }        
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

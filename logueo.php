<?php 
    
    include 'code-register.php';

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width" />
    <title>MarBLUE</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="images/svg" href="img/logo1.svg">
    <!--icono de la pagina-->

</head>
<body>

    <div class="container-all">
        <div class="ctn-form">
            <img src="" alt="" class="logo">
            <h1 class="title">Registrarse</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">



                <div>
                    <div class="iconos">
                        <div class="border-icon">
                            <i class='bx bxl-instagram'></i>
                        </div>
                        <div class="border-icon">
                            <i class='bx bxl-linkedin' ></i>
                        </div>
                        <div class="border-icon">
                            <i class='bx bxl-facebook-circle' ></i>
                        </div>
                    </div>
               
                <label for="">Nombre de Usuario</label>
                <input type="text" name="username">
                <span class="msg-error"><?php echo $username_err; ?></span>
                <label for="">Email</label>
                <input type="text" name="email">
                <span class="msg-error"> <?php echo $email_err; ?></span>
                <label for="">Contraseña</label>
                <input type="password" name="password">
                <span class="msg-error"> <?php echo $password_err; ?></span>
                <br>
                <br>
                <input type="submit" value="Registrarse">

            </form>
            <br>
            <span class="text-footer">¿Ya te has registrado?
                <br>
                <br>
                <a href="index.php">Iniciar Sesión</a>
            </span>
        </div>
</body>
</html>
<?php
    
    require "code-login.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos1.css"> <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width" />
    <title>MarBLUE</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="images/svg" href="img/logo1.svg">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>

    <div class="container-all">

        <div class="ctn-form">
            <img src="" alt="" class="logo">
            <h1 class="title">Iniciar Sesión</h1>
<!--htmlspecialchars  Esta función convierte caracteres especiales en entidades HTML.-->

<!--El Echo se puede utilizar para mostrar el resultado de cualquier expresión-->

<!--$_SERVER es una matriz que contiene información como encabezados, rutas y ubicaciones de secuencias de comandos-->
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


                <label for="">Email</label>
                <input type="text" name="email">
                <span class="msg-error"><?php echo $email_err; ?></span>
                <label for="">Contraseña</label>
                <input type="password" name="password">
                <span class="msg-error"><?php echo $password_err; ?></span>

                <input type="submit" value="Iniciar">

            </form>
            <br>
            <span class="text-footer">¿Aún no te has regsitrado?
                <br>
                <br>
                <a href="logueo.php">Registrate</a>
            </span>
        </div>

        

    </div>

</body>

</html>

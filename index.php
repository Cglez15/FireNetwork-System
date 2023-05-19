<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Inicia Sesión con Issues Solvers</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="style3.css">
<style>
    .boton-invisible {
    display: none;
  }
  .boton-azul {
    display: block;
    margin: 0 auto;
    background-color: #0074D9;
    color: white;
    border: none;
    padding: 10px 50px 10px 50px;
    border-radius: 25px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
  }

  .boton-azul:hover {
    background-color: #005EB8;
  }
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login responsive</title>
        
    </head>
    <body>
        <main class="main-container">
            <div class="login-wrapper">

                <div class="left-container">
                    <div class="header">
                        <a class="arrow" href="index.php">←</a>
                        <a class="register" href="register.php">Registrarse</a> 
                    </div>
                    <div class="main">
        <h2>Registrate</h2>
        <form action="" method="post">

        <?php
session_start();

include 'config.php';
$msg = "";

if (isset($_GET['verification'])) {
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code='{$_GET['verification']}'")) > 0) {
        $query = mysqli_query($conn, "UPDATE users SET code='' WHERE code='{$_GET['verification']}'");
        
        if ($query) {
            $msg = "<div class='alert alert-success'>La verificación de la cuenta ha sido completada.</div>";
        }
    } else {
        header("Location: index.php");
    }
}

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if (empty($row['code'])) {
            $_SESSION['unique_id'] = $email;

            if ($row['id_rol'] == 1) {
                header("Location: welcomeAdmin.php");
                exit();
            } elseif ($row['id_rol'] == 2) {
                header("Location: welcome.php");
                exit();
            } elseif ($row['id_rol'] == 3 || $row['id_rol'] == 4) {
                header("Location: welcomeEsp.php");
                exit();
            }

        } else {
            $msg = "<div class='alert alert-info'>First verify your account and try again.</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
    }
}
?>


      <?php echo $msg; ?>

      <input type="email" class="email" name="email" placeholder="Ingresa tu correo" required>
      <input type="password" class="password" name="password" placeholder="Ingresa tu contraseña" style="margin-bottom: 2px;" required>
     
      <div class="forgotPass">
                                <a href="forgot-password.php">Olvidaste tu contraseña?</a>
                            </div>
                            <div class="login-now">
                                 <button name="submit" name="submit" class="boton-azul" type="submit">Iniciar sesion</button>
      
                            </div>

                            <span class="line"></span>
                        </form> 
                    </div>
                    <div class="footer">
                        <div class="social-media">
                            <h3></h3>
                            <div class="links-wrapper">    
                                <a href="#"><img src="https://image.flaticon.com/icons/png/512/23/23681.png" alt=""></a>
                                <a href="#"><img src="https://image.flaticon.com/icons/png/512/23/23681.png" alt=""></a>
                                <a href="#"><img src="https://image.flaticon.com/icons/png/512/23/23681.png" alt=""></a>
                            </div>    
                        </div>     
                    </div>
                </div>    
                 <!--Right container(img) -->
                <div class="side-container">
                    <div class="side-text-container">  
                        <div class="short-line">
                            <hr>
                        </div>
                        
                        
                    </div>   
                </div>
            </div>
        </main>
        
    </body>
<!-- partial -->
  
</body>
</html>

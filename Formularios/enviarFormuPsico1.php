<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Psicológico</title>
    <link rel="stylesheet" type:"text/css" href="style4.css">
</head>
<body>
    
    <form action="recibirFormuPsico1.php" method="POST">
  <?php 
        if (isset($_GET['error'])) {
            ?>

            <p>
                <?php
                    echo $_GET['error']
                ?>
            </p>
    <?php        
        }
    
    ?> 
        <label>
            ¿Cuál el motivo por el cuál escribes hoy?
            <br>
            <br>
            <input type="text" name="problema1" placeholder="Hoy no me dió tiempo de desayunar :(">
        </label>
        <br>
        <br>
        <label>
            ¿Cómo consideras que ha sido tu rutina psicológica en la última semana?
            <br>
            <br>
            <input type="text" name="problema2">
        </label>
        <br>
        <br>
        <label>
            ¿Te has sentido mejor interactuando con otros usuarios durante esta semana?, ¿Por qué?
            <br>
            <br>
            <input type="text" name="problema3">
        </label>
        <br>
        <br>
        <label>
            ¿Qué cosas quisieras mejorar en tu forma de pensar?
            <br>
            <br>
            <input type="text" name="problema4">
        </label>
        <br>
        <br>
        <label>
            ¿Qué cosas cambiarías de la rutina que tienes?
            <br>
            <br>
            <input type="text" name="problema5">
        </label>
        <br>
        <br>
        <label>
            ¿Cómo modificarías tu nueva rutina?
            <br>
            <br>
            <input type="text" name="problema6">
        </label>
        <br>
        <br>
        <label>
            ¿Qué malos hábitos con respecto a tu salud mental consideras que tienes?
            <br>
            <br>
            <input type="text" name="problema7">
        </label>
        <br>
        <br>
        <button type="submit" name:"enviar"> Enviar </button>

    </form>

</body>
</html>
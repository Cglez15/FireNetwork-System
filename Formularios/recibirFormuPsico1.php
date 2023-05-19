<!DOCTYPE html>
<html>
<head>
  <title>Formulario</title>
  <link rel="stylesheet" href="style5.css">
</head>
<body>

    <form action="enviarFormuPsico1.php">
  <div class="container">

<?php

    include('conexion.php');
    if(isset($_POST['problema1']) && isset($_POST['problema2']) && isset($_POST['problema3']) && isset($_POST['problema4']) && isset($_POST['problema5']) && isset($_POST['problema6']) && isset($_POST['problema7'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
    
    $problem1 = validate($_POST['problema1']);
    $problem2 = validate($_POST['problema2']);
    $problem3 = validate($_POST['problema3']);
    $problem4 = validate($_POST['problema4']);
    $problem5 = validate($_POST['problema5']);
    $problem6 = validate($_POST['problema6']);
    $problem7 = validate($_POST['problema7']);

    if(empty($problem1)){
        header("Location: enviarFormuPsico1.php?error=Rellena el campo vacío");
        exit();
    }elseif(empty($problem2)){
        header("Location: enviarFormuPsico1.php?error=Rellena el campo vacío");
        exit();
    }elseif(empty($problem3)){
        header("Location: enviarFormuPsico1.php?error=Rellena el campo vacío");
        exit();
    }elseif(empty($problem4)){
        header("Location: enviarFormuPsico1.php?error=Rellena el campo vacío");
        exit();
    }elseif(empty($problem5)){
        header("Location: enviarFormuPsico1.php?error=Rellena el campo vacío");
        exit();
    }elseif(empty($problem6)){
        header("Location: enviarFormuPsico1.php?error=Rellena el campo vacío");
        exit();
    }elseif(empty($problem7)){
        header("Location: enviarFormuPsico1.php?error=Rellena el campo vacío");
        exit();
    }else{

        $sql = "SELECT * FROM formularios WHERE problema1 = '$problem1' AND problema2 = '$problem2' AND problema3 = '$problem3' AND problema4 = '$problem4' AND problema5 = '$problem5' AND problema6 = '$problem6' AND problema7 = '$problem7'";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['problema1'] == $problem1 && $row['problema2'] == $problem2 && $row['problema3'] == $problem3 && $row['problema4'] == $problem4 && $row['problema5'] == $problem5 && $row['problema6'] == $problem6 && $row['problema7'] == $problem7) {
                $_POST['problema1'] = $row['problema1'];
                $_POST['problema2'] = $row['problema2'];
                $_POST['problema3'] = $row['problema3'];
                $_POST['problema4'] = $row['problema4'];
                $_POST['problema5'] = $row['problema5'];
                $_POST['problema6'] = $row['problema6'];
                $_POST['problema7'] = $row['problema7'];
                exit();
            }
        }
    }
}else {
    header("Location: enviarFormuPsico1.php");
    exit();
}

echo "<p>¿Cuál el motivo por el cuál escribes hoy?<br><br> $problem1</p>";
echo "<p>¿Cómo consideras que ha sido tu rutina alimenticia en la última semana?<br><br> $problem2</p>";
echo "<p>¿Te has sentido mejor siguiendo un tratamiento previamente?, ¿Por qué?<br><br> $problem3</p>";
echo "<p>¿Qué cosas quisieras cambiar acerca de tu propia alimentación?<br><br> $problem4</p>";
echo "<p>¿Qué cosas cambiarías de la rutina que tienes?<br><br> $problem5</p>";
echo "<p>¿Cómo modificarías tu nueva rutina?<br><br> $problem6</p>";
echo "<p>¿Qué malos hábitos alimenticios consideras que tienes?<br><br> $problem7</p>"; ?>

<button type="submit" name:"regresar"> Regresar </button>

        </div>
    </body>
</html>
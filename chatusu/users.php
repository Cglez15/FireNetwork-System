<?php 
  session_start();
  include_once "../config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }

  

?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users OR psico WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          
          

          <div class="details">

          
          
             
          
            
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <?php
        $sql2 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
  if(mysqli_num_rows($sql2) > 0){
    $row2 = mysqli_fetch_assoc($sql2);
    echo '<a href="../welcome.php?email=' . $row2 . '" class="logout">Ir a mi perfil</a>';
  }
?>
          
      </header>
      <div class="search">
        <span class="text">Selecciona un usuario para empezar</span>
        <input type="text" placeholder="Introduce un nombre para buscar">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  

</body>
</html>

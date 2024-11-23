<?php 
session_start();
?>

<div class="container h-100 d-flex flex-column justify-content-center align-items-center">
    <div class="d-flex flex-column ">
        <h1>Seja bem vindo <?php echo $_SESSION["user"] ?></h1>
          <button type="button" class="btn btn-primary mx-auto"><a href="logout.php" class="text-light p-2 text-decoration-none align-self-center" >Sair</a></button>
    </div>
  
</div>
<?php include "./public/bootstrap/css/bootstrap.php"?>
<?php include "./public/bootstrap/js/bootstrap.php"?>
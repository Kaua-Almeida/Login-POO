<?php

require "vendor/autoload.php";
session_start();

use App\services\Login;
use App\Entity\User;

$error;

if (isset($_POST['email'], $_POST['password'])) {

    $user = new User($_POST['email'], $_POST['password']);
    $login = new Login($user);

    if ($login->login()) {
        $_SESSION["user"] = $login->email;
        header("location:loggedin.php");
        die;
    }
    $error = "dados inválidos";
}

?>


<div class="container w-50 mt-5">
    <p class="text-danger"><?php echo $error ?? "" ?></p>
    <form method="POST">
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="Email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3"><input type="submit" value="Logar" class="btn btn-primary p-2"></div>
    </form>

</div>
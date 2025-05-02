<?php
require_once './include/header.php';
require_once './config/database.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
}
?>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h1>Sign Up Here!</h1>
            <form action="login.php" method="post">
                <div class="mb-4">
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" id="" class="form-control">
                </div>
                <div class="mb-4">
                    <input type="submit" value="Login" class="form-control btn btn-primary" name="submit">
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
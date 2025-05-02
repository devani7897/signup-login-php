<?php
    require_once './include/header.php';
    require_once './config/database.php';

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";
        
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "<script>alert('User Already Exists!')</script>";
        }

        if($result){
            echo "<script>alert('User Created Successfully!')</script>";
            echo "<script>window.location.href='login.php'</script>";
        }else{
            echo "<script>alert('User Creation Failed!')</script>";
        }

    }
?>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h1>Sign Up Here!</h1>
            <form action="" method="post">
                <div class="mb-4">
                 <label for="name">Name:</label><br>
                 <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="phone">Phone</label><br>
                    <input type="text" name="phone" id="" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" id="" class="form-control">
                </div>
                <div class="mb-4">
                    <input type="submit" value="Sign Up" class="form-control btn btn-primary" name="submit">
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
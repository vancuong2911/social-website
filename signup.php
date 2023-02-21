<?php 
require 'functions.php';

$errors = array();
if($_SERVER['REQUEST_METHOD'] == "POST") {

    $errors = signup($_POST);

    if(count($errors) == 0) {
        header('location: signin.php');
        die();
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/sign.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>SignUp - CuongSocial</title>
</head>

<body>
    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-header">
                <h1>Sign Up</h1>
                <div>Please signup to use the platform</div>
            </div>
            <div>
                <?php if(count($errors) > 0):?>
                    <?php foreach ($errors as $error):?>
                        <?= $error?> <br>	
                    <?php endforeach;?>
                <?php endif;?>

            </div>
            <form action="" class="login-card-form" method="POST" enctype="multipart/form-data">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">mail</span>
                    <input type="text" name="email" placeholder="Enter Email" id="emailForm" 
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" name="password" placeholder="Password" id="passwordForm"
                     required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" name="confirmpassword" placeholder="Confirm Password" id="confirmpassword"
                     required>
                </div>
                <button type="submit" name="signup">Sign Up</button>
            </form>
        </div>
    </div>

</body>

</html>
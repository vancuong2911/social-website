<?php 
require 'functions.php';

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $errors = signin($_POST);

    if(count($errors) == 0) {
        header('location: profile.php');
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
    <title>Signin - CuongSocial</title>
</head>

<body>
    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-header">
                <h1>Sign In</h1>
                <div>Please login to use the platform</div>
            </div>
            
            <div style="margin-bottom: 1rem;color:red;">
                <?php if(count($errors) > 0):?>
                    <?php foreach ($errors as $error):?>
                        <?= $error?> <br>	
                    <?php endforeach;?>
                <?php endif;?>
            </div>

            <form action="" class="login-card-form" method="POST">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">mail</span>
                    <input type="text" name="email" placeholder="Enter Email" id="emailForm" 
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input type="password" name="password" placeholder="Enter Password" id="passwordForm"
                     required>
                </div>
                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox" checked>
                        <label for="rememberMeCheckbox">Remember me</label>
                    </div>
                    <a href="#">I forgot my password!</a>
                </div>
                <button type="submit">Sign In</button>
            </form>
            <div class="login-card-footer">
                Don't have an account? <a href="signup.php">Create a free account.</a>
            </div>
        </div>
        <div class="login-card-social">
            <div>Other Sign-In Options</div>
            <div class="login-card-social-btns">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook"
                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>

</body>

</html>
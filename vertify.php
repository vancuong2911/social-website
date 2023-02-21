<?php
require 'mail.php';
require 'functions.php';
check_login();

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()){

    //send email  
    $vars['code'] =  rand(10000,99999); 

    //save to database
    $vars['expires'] = (time() + (60 * 10));
    $vars['email'] = $_SESSION['user']['email'];

    $query = "insert into verify (code,expires,email) values (:code,:expires,:email)";
    database_run($query,$vars);

    // Mail
    $recipient = $vars['email'];
    $subject = "Email verification";
    $message = "your code is " . $vars['code'];
    send_mail($recipient,$subject,$message);
}

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(!check_verified()){

        $query = "select * from verify where code = :code && email = :email";
        $vars = array();
        $vars['email'] = $_SESSION['user']['email'];
        $vars['code'] = $_POST['code'];

        $row = database_run($query,$vars);

        if(is_array($row)){
            $row = $row[0];
            $time = time();

            // Kiểm tra code hết hạn
            if($row->expires > $time){

                $id = $_SESSION['user']['id'];
                $query = "update users set email_verified = email where id = '$id' limit 1";
                
                database_run($query);

                header("Location: profile.php");
                die;
            }else{
                $errors[] = "Code expired";
            }

        }else{
            $errors[] = "wrong code";
        }
    }else{
        $errors[] = "You're already verified";
    }
}

?>

<?php include('partials/header.php') ?>

<form action="" method="POST">
    <div style="margin-top: 5rem;color:red;" class="message error success">
        <?php if (count($errors) > 0) : ?>
            <?php foreach ($errors as $error) : ?>
                <?= $error ?> <br>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="form-verify">
        <span class="text-vertify">Vertify Email</span>
        <input type="text" name="code" placeholder="Code from email" id="codeVertify" autofocus required>
        <input type="submit" value="Vertify" class="btn btn-primary">
    </div>

</form>



<?php include 'partials/footer.php' ?>
<?php 
require 'functions.php';
check_login();

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $errors = editProfile($_POST);


    
    
    
}


?> 

<?php include('partials/header.php') ?>

    <div class="profile-verified">
        <span>
        <?php 
            if(check_login(false)) {
                echo "Hi, " . $_SESSION['user']['email'];
            }
        ?>
        </span>
         
        <?php 
            if(!check_verified()): ?>
                <a href="vertify.php" class="verified-email">
                    <button>Verify Profile</button>
                </a>
            <?php else :?>
            <form action="" class="edit-profile-form" method="POST" enctype="multipart/form-data">
                <div style="text-align: left;">
                    <?php if( is_array($errors) && count($errors) > 0):?>
                        <?php foreach ($errors as $error):?>
                            <?= $error?>
                        </br>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
                <div class="name-edit">
                    <label>Username</label>
                    <input type="text" name="usernamenew" value="<?=$_SESSION['user']['username']?>" placeholder="Edit username">
                    <input type="hidden" name="id" value="<?=$_SESSION['user']['id']?>">
                </div>
                <div class="picture-edit">
                    <label>Profile Picture</label>
                    <input type="file" class="form-control" name="fileToUpload" >
                </div>
                <input type="submit" class="btn btn-primary" value="Save">
            </form>
        <?php endif ?>
    </div>

<?php include 'partials/footer.php' ?>

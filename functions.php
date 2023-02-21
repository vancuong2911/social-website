<?php
session_start();

function signup($data) {
    $errors = array();
    
    // validate
    if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
		$errors[] = "Please enter a valid email";
	}

	if(strlen(trim($data['password'])) < 4){
		$errors[] = "Password must be atleast 4 chars long";
	}

	if($data['password'] != $data['confirmpassword']){
		$errors[] = "Passwords must match";
	}

    $check = database_run("select * from users where email = :email limit 1",['email'=>$data['email']]);
	if(is_array($check)){
		$errors[] = "That email already exists";
	}

    // save
    if(count($errors) == 0) {
        $arr['email'] = $data['email'];
		$arr['password'] = hash('sha256',$data['password']);
		$arr['date'] = date("Y-m-d H:i:s");

        $query = "INSERT INTO users (email, password, date) VALUES (:email, :password, :date)";
        database_run($query, $arr);
    }

    return $errors;
}

function database_run($query, $vars = array()) {
    $string = "mysql:host=localhost;dbname=socialwebsite";
	$con = new PDO($string,'cuongblog','admin1234');

	if(!$con){
		return false;
	}

	$stm = $con->prepare($query);
	$check = $stm->execute($vars);

    // Chuẩn bị truy vấn: hàm prepare của đối tượng PDO (PHP Data Object)
    // Thực thi truy vấn: hàm execute của đổi tượng PDOStatement 
    // hàm nhận 2 đối số
    // $query: là một chuỗi chứa truy vấn SQL cần thực thi.
    // $vars: là một mảng các biến cần truyền vào trong truy vấn.
    // fetchAll: lấy tất cả kết quả trả về

	if($check){
		$data = $stm->fetchAll(PDO::FETCH_OBJ);
		
		if(count($data) > 0){
			return $data;
		}
	}

	return false;

}

function signin($data) {
    $errors = array();

    //validate 
	if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
		$errors[] = "Please enter a valid email";
	}

	if(strlen(trim($data['password'])) < 4){
		$errors[] = "Password must be atleast 4 chars long";
	}

    // check 
    if(count($errors) == 0) {
        $arr['email'] = $data['email'];
		$password = hash('sha256', $data['password']);

        $query = 'SELECT * FROM users WHERE email = :email limit 1';
        $row = database_run($query, $arr);


        if(is_array($row)){
			$row = (array)$row[0];

			var_dump($row);
			
			if($password === $row['password']){
				
				$_SESSION['user'] = $row;
				$_SESSION['LOGGED_IN'] = true;
			}else{
				$errors[] = "wrong email or password";
			}

		}else{
			$errors[] = "wrong email or password";
		}
    }

    return $errors;
}

function check_login($redirect = true){

	if(isset($_SESSION['user']) && isset($_SESSION['LOGGED_IN'])){

		return true;
	}

	if($redirect){
		header("Location: signin.php");
		die;
	}else{
		return false;
	}
	
}

function check_verified(){

	$id = $_SESSION['user']['id'];
	$query = "select * from users where id = '$id' limit 1";
	$row = database_run($query);

	if(is_array($row)){
		$row = (array)$row[0];

		if($row['email'] == $row['email_verified']){

			return true;
		}
	}
 
	return false;
 	
}

function editProfile($data) {
	$errors = array();
	
	// validate 
	if(empty($data['usernamenew'])) {
		$errors[] = "Tên không được để trống bạn nhé!";
	} elseif($data['usernamenew'] === $_SESSION['user']['username']) {
		$errors[] = "Bạn chưa thay đổi tên!";
	}
	 else {
		$username = filter_var($data['usernamenew']);
		if($username === '') {
			$errors[] = "Invalid username.";
		}
	}

	if(empty($errors)) {
		$sql = "UPDATE users SET username = :usernamenew WHERE id = :id LIMIT 1";
		$vars = array(':usernamenew' => $username, ':id' => $data['id']);
		$row = database_run($sql, $vars);
		
		if(!is_null($row)) {
			$_SESSION['user']['username'] = $data['usernamenew'];
			return true;
		} else {
			$errors[] = "Failed to update profile.";
		}
	}
	// Upload file
	if(empty($_FILES['fileToUpload']['name'])) {
		$errors[] = 'Tải ảnh lên đi bạn :((';
	} else {
		$file = rand(1000, 100000). "-".$_FILES['fileToUpload']['name'];
		$file_loc = $_FILES['fileToUpload']['tmp_name'];
		$folder = 'assets/imagesupload/';

		// make file name in lower case
		$new_file_name = strtolower($file);

		$final_file = str_replace(' ', '-', $new_file_name);

		if(move_uploaded_file($file_loc,$folder.$final_file)) {
			$arr['id'] = $data['id'];
			$sql = "UPDATE users SET image = '$final_file' WHERE id = :id LIMIT 1";
	
			$row = database_run($sql,$arr);

			if(!is_null($row)) {
				$_SESSION['user']['image'] = $final_file;
				return true;
			} else {
				$errors[] = "That bai";
			}
			echo "Thanh Cong";
		}
	}

	return $errors;
}

function createPost($data) {
	$errors[] = array();

	$sql = "SELECT * FROM posts WHERE id = :id Limit 1";
	$arr = array($sql);
	$posts = database_run($sql, $arr);

	$posts['textpost'] = "Hay ghi vao day";
	return $posts;

	$_SESSION['post']['textpost'] = $_POST['textpostnew'];

	$textpost = filter_var($_SESSION['post']['textpost']);

	if($_SESSION['post']['textpost'] !=$_SESSION['post']['textpost']) {
		$sql = "UPDATE posts SET textpost = :=textpostnew WHERE id =: id LIMIT 1";
		$vars = array(':textpostnew' => $textpost, ':id' => $data['id']);

		$row = database_run($sql, $vars);
		print_r($row);
		if(!is_null($row)) {
			$_SESSION['post']['textpost'] =$_SESSION['post']['textpost'];
			return true;
		} else {
			$errors[] = "Lỗi tải text!";
		}

	}


}


?>
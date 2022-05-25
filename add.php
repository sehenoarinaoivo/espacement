<?php
//   require_once('config.php');
//   $upload_dir = 'uploads/';

//   if (isset($_POST['Submit'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
// 	$passwd= $_POST['mdp'];
  

//     if(empty($name)){
// 			$errorMsg = 'Please input name';
// 		}elseif(empty($email)){
// 			$errorMsg = 'Please input email';
// 		}elseif(empty($passwd)){
// 			$errorMsg = 'Please input Password';
// 		}


// 		if(!isset($errorMsg)){
// 			$sql = "insert into inscription(name, email, mdp)
// 					values('".$name."', '"."', '".$email."', '".MD5($passwd)."')";
// 			$result = mysqli_query($conn, $sql);
// 			if($result){
// 				$successMsg = 'New record added successfully';
// 				header('Location: inscription.php');
// 			}else{
// 				$errorMsg = 'Error '.mysqli_error($conn);
// 			}
// 		}
//   }
?>

<?php
	//connection bdd
	include('config.php');
// INSERT INTO `users` (`id`, `name`, `email`, `mdp`) VALUES (NULL, 'Marie Lovatiana', 'lova@gmail.com', '11111111');
	$ins = $base->prepare("INSERT INTO `users` (`id`, `name`, `email`, `mdp`) 
	VALUES (NULL, :nom, :email, :mdp);");
	$ins->execute(array(
		"nom"=>$_POST["name"],
		"email"=>$_POST["email"],
		"mdp"=>$_POST["mdp"],
		
	));
	header("Location: inscription.php");

?>


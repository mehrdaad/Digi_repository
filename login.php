<?php
session_start();
    function login(){
				$error="";
				$success=true;
				if(islogin())
				{
					$error=$error."You are already sign in!!\n";
					$success=false;
				}
				$_SESSION['islogin']=false;
				if(empty($_POST['username']))
				{
					$error=$error."نام کاربری نمی تواند خالی باشد.\n";
					$success=false;
				}
				if(empty($_POST['password']))
				{
					$error=$error."کلمه عبور نمی تواند خالی باشد.\n";
					$success=false;					
				}
				if(!$success)
				return($error);
				
				$username=$_POST['username'];
				$password=$_POST['password'];
				$db_username='root';
				$db_password="";
				$db_servername="localhost";
				$db_name="cms";
				
				try {
							$conn = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
							// set the PDO error mode to exception
							$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						
							// prepare sql and bind parameters
							$stmt = $conn->prepare("SELECT * FROM people WHERE username=:UN AND password=:PW");
							$stmt->bindParam(":UN", $username);
							$stmt->bindParam(":PW", $password);
							$stmt->execute();
								
							if($stmt->rowCount()==1) {
							$row = $stmt->fetch(PDO::FETCH_ASSOC);
							$_SESSION['id']=$row['id'];
							$_SESSION['access']=$row['access'];
							//if($_SESSION['access']=="Admin") header("Location: admin-page.php");
							}
							else								
							    $error=$error."نام کاربری و یا رمز عبور شما اشتباه است.\n";
							   

						 
					}
					 catch(PDOException $e)
					{
							echo "Error: " . $e->getMessage();
					}
					$conn = null;
					return($error);
}


function islogin(){
	if(isset($_SESSION["id"]))
	return true;
	else
	return false;
}
function isadmin(){
	if(isset($_SESSION["id"]))
	if($_SESSION['access']=="Admin")
	return true;
	else
	return false;
	else
	return false;
}
?>
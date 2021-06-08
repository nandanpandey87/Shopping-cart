<?php

$con = mysqli_connect('localhost','root');


if($con){
	//echo "Connection succesful";
}
else{
	//echo "No connection";
}

mysqli_select_db($con,'fsdata');

$username = $_POST['Username'];
$email = $_POST['email'];
$password = $_POST['Password'];
$str_password = password_hash($password, PASSWORD_BCRYPT);
$pass_check = password_verify($password, $str_password);
if($pass_check)
{
	//echo "<br> login successful";
	//echo "<script>
		//{
			//alert('Good job!.... registraion successful....');window.location='index.php';
		//}
		//</script>";
}
else{
	echo "<script>
		{
			alert('login incorrect');window.location='register.php';
		}
		</script>";
}

		$username_search = "select * from registerphp where username='$username' ";
        $query = mysqli_query($con, $username_search);
        $username_count = mysqli_num_rows($query);

        if($username_count>0){
        	echo "<script>
				{
					alert('username already exists!!..try again..');window.location='register.php';
				}
				</script>";
        }

		if(!$username_count)
		{
			$query = "insert into registerphp (username,email,password) values('$username','$email','$str_password')";
			mysqli_query($con,$query);
			
			echo "<script>
				{
					alert('Good job!.... registraion successful....please login');window.location='login.php';
				}
				</script>";
		}
//header('location:index.php');
?>
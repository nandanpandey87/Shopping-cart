<?
session_start();
?>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css_login_register/style.css" type="text/css" media="all" />

    <!-- fontawesome v5 -->
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>



            <div class="forms-grid">
                <!-- login -->
                <div class="login">
                    <span class="fas fa-sign-in-alt"></span>
                    <strong>Welcome!</strong>
                    <span>Sign in to your account</span>

                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="login-form">
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <span class="fas fa-user"></span>
                                    <label class="form-label" for="input">username</label>
                                    <input type="text" name="username" class="form-text">
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-eye"></span>
                                    <label class="form-label" for="input">Password</label>
                                    <input type="password" name="password" class="form-text">
                                </div>
                                <div class="form-row bottom">
                                    <div class="form-check">
                                        <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                        <label for="remenber"> remember me?</label>
                                    </div>
                                    <a href="#url" class="forgot">forgot password?</a>
                                    </div>

                                <div class="form-row button-login">
                                    <button class="btn btn-login" type="submit" name="submit" >Login <span
                                            class="fas fa-arrow-right"></span></button>
                                </div>

                                    <a href="register.php" class="forgot">Or You Want To Signup?</a>

                            </div> 
                        </fieldset>
                    </form>
                </div>
            </div>

<?php
    
    include 'dbcon.php';
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

        $username_search = "select * from registerphp where username='$username' ";

        $query = mysqli_query($con, $username_search);

        $username_count = mysqli_num_rows($query);

        if($username_count){
            $username_pass = mysqli_fetch_assoc($query);

            $db_pass = $username_pass['password'];
            $pass_decode = password_verify($password, $db_pass);
            if($pass_decode)
            {
                session_start();
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;

                echo "login successfull";header("Location: welcome.php");
            }
            else
            {
                echo "<script>
                    {
                        alert('password incorrect');window.location='login.php';
                    }
                    </script>";
            }
        }
        else
        {
            echo "<script>
                {
                    alert('invalid username..try again');window.location='login.php';
                }
                </script>";
        }
    }

?>
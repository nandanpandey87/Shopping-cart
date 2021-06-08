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
                <!-- register -->
                <div class="register">
                    <span class="fas fa-user-circle"></span>
                    <strong>Create account!</strong>
                    <form action="registerphp.php" method="post" class="register-form">
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <span class="fas fa-user"></span>
                                    <label class="form-label" for="input">Username</label>
                                    <input type="text" name="Username"  class="form-text">
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-envelope"></span>
                                    <label class="form-label" for="input">E-mail</label>
                                    <input type="text" name="email" class="form-text">
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-lock"></span>
                                    <label class="form-label" for="input">Password</label>
                                    <input type="text" name="Password" class="form-text">
                                </div>
                                <div class="form-row button-login">
                                    <button class="btn btn-login">Create  <span
                                            class="fas fa-arrow-right"></span></button>
                                </div>

                                
                            </div>
                        </fieldset>
                        </form>

                        <a href="login.php" class="create-account">Or You Want to Login?</a>

                        <div class="social-media">
                            <a href="#facebook" class="fb"><span class="fab fa-facebook"></span></a>
                            <a href="#twitter" class="tw"><span class="fab fa-twitter"></span></a>
                            <a href="#pinterest" class="pi"><span class="fab fa-pinterest"></span></a>
                            <a href=""></a>
                        </div>
                </div>
                <!-- //register -->
            </div>
<title>Login</title>

<body class="body_color">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="login">
                    <?php
                    //start the session
                    session_start();
                    //check if the user is already logged in
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        //if the user is logged in, redirect them to the welcome page
                        header("location: admin.php");
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <h1 class="login_header">Login</h1>
                </div>
                <div class="loginForm">
                    <form method="post">
                        <input type="text" name="username" placeholder="username" class="login" required>
                        <input type="password" name="wachtwoord" class="login" required>
                        <div>
                            <button class="button" name="submit">send</button>
                        </div>
                        <div>
                            <button class="registnewaccount" name="registnew">regist new account</button>
                        </div>
                        <?php

                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
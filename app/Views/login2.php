<html>

<head>
    <title>Login</title>
</head>
<link rel="stylesheet" href="<?php echo base_url('theme2'); ?>/css/login.css">

<body>
    <?php
    $session = session();
    $login = $session->getFlashdata('login');
    $username = $session->getFlashdata('email');
    $password = $session->getFlashdata('password');
    ?>
    <div class="login-page">
        <div class="form">
            <h3>Silahkan Login</h3>
            <form class="register-form">
                <input type="text" placeholder="name" />
                <input type="password" placeholder="password" />
                <input type="text" placeholder="email address" />
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            <form class="login-form" action="/auth/valid_login/" method="POST">
                <?php if ($username) { ?>
                    <p style="color:red"><?php echo $username ?></p>
                <?php } ?>

                <?php if ($password) { ?>
                    <p style="color:red"><?php echo $password ?></p>
                <?php } ?>

                <?php if ($login) { ?>
                    <p style="color:green"><?php echo $login ?></p>
                <?php } ?>
                <input type="text" placeholder="username" name="username" />
                <input type="password" placeholder="password" name="password" />
                <button type="submit" name="login">login</button>
            </form>
        </div>
    </div>
</body> 

</html>
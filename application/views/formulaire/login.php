<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/bootstrap-3.3.6-dist/css/bootstrap.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/login.css"); ?>">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="col-md-12 title">
                    Sign In
                </div>
                <form action="<?php echo site_url("Form/loginController"); ?>" method="post">
                    <p>
                        <input type="email" name="email" placeholder="email" required>
                    </p>
                    <p>
                        <input type="text" name="mdp" placeholder="mots de passe" required>
                    </p>
                    <p>
                        <input type="submit" class="btn" value="Valider">
                    </p>
                </form>
                <div>
                    Don't have an account?
                    <br/>
                    <span><a href="<?php echo site_url("Form/inscriptionView"); ?>">SIGN UP NOW</a></span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
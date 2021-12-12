<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP v5.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-------------------->

    <link rel="stylesheet" href="assets/css/style.css">

    <title>Login</title>
</head>
<body>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);

        if (!isset($_GET['controller'])) {
            require_once('controller/LoginController.php');
            $loginController = new LoginController();
            $loginController -> login();
        } else {
            switch(($_REQUEST['controller'])) {
                case 'login':
                    require_once('controller/LoginController.php');
                    $loginController = new LoginController();
                    if(!isset($_GET['action'])) {
                        $loginController -> login();
                    } else {
                        switch($_REQUEST['action']) {
                            case 'login':
                                $loginController -> login();
                                break;
                            case 'registerForm':
                                $loginController -> openRegisterForm();
                                break;
                            case 'validateLogin':
                                $loginController -> validateLogin();
                                break;
                            case 'register':
                                $loginController -> register();
                                break;
                        }
                    }
                    break;
                case 'user':
                    require_once('controller/UserController.php');
                    $userController = new UserController();
                    if(!isset($_GET['action'])) {
                        $userController -> home();
                    } else {
                        switch($_REQUEST['action']) {
                            case 'home':
                                $userController -> home();
                            case 'openPontosTuristicos':
                                $userController -> openPontosTuristicos();
                        }
                    }
            }
        }
    ?>
</body>
</html>
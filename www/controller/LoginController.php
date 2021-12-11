<?php
    class LoginController {

        function __construct() {
           require_once('model/UserModel.php');
           $this -> UserModel = new UserModel();
        }

        public function login() {
            require_once('views/login/login.php');
        }
        
        public function validateLogin() {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $result = $this -> UserModel -> getUser($email);

            if ($user = $result -> fetch_assoc()) {
                if ($password == $user['senha']) {
                    $_SESSION['login'] = $user;
                    require_once('controller/UserController.php');
                    $userController = new UserController();
                    $userController -> home();
                } else {
                    echo('Senha inválida, tente novamente.');
                }
            } else {
                echo('E-mail incorreto e/ou inexistente.');
            }
        }

        public function home() {
            require_once('views/templates/header.php');
            require_once('views/main/home.php');
            require_once('views/templates/footer.php');
        }

        public function openRegisterForm() {
            require_once('views/login/registerForm.php');
        }

        public function register() {
            $arrayUser['name'] = $_POST['name'];
            $arrayUser['password'] = $_POST['password'];
            $arrayUser['email'] = $_POST['email'];
            
            $idUser = $this -> UserModel -> create($arrayUser);
            require_once('views/login/login.php');
        }
    }
?>
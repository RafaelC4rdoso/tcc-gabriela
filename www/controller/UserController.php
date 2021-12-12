<?php 
    class UserController {

        public function home() {
            require_once('views/templates/header.php');
            require_once('views/main/home.php');
            require_once('views/templates/footer.php');
        }

        public function openPontosTuristicos() {
            require_once('views/templates/header.php');
            require_once('views/main/pontos-turisticos.php');
            require_once('views/templates/footer.php');
        }
    }
?>
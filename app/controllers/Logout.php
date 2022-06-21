<?php
    namespace App\Controllers;
    use App\Core\Controller;
    
    class Logout extends Controller {
        public function index() {
            session_destroy();
		    header("location:http://127.0.0.1:8080/mvc/login");
        }
    }
?>
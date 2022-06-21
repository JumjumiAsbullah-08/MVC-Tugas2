<?php
    namespace App\Controllers;
    use App\Core\Controller;
    use App\Core\Model;
    
    class Login extends Controller {
        public function index() {
            $model = new Model;
            $data['row_index'] = "";
		    $this->home('login/index', $data);
        }

        public function formLogin(){
            $user_email         = $_POST['user_email'];
            $user_password      = $_POST['user_password'];
            $model  = new Model;
            $res = $model->formMasuk($user_email, $user_password);
            
            if($res == "gagal"){
                header("location:http://127.0.0.1:8080/mvc/login");
            }
            else{
                $_SESSION['user_email']     = $res['user_email'];
                $_SESSION['user_password']  = $res['user_password'];
                $_SESSION['user_nama']      = $res['user_nama'];


                if($res['user_role'] == 1){
                    $_SESSION['member']  = "Admin";
                    header("location:http://127.0.0.1:8080/mvc/admin");    
                }
                elseif($res['user_role'] == 2){
                    $_SESSION['member']  = "Member";
                    header("location:http://127.0.0.1:8080/mvc/member");
                }
                else{
                    $data['user_login'] = 'Username atau Password anda salah!';
                    //header("location:http://127.0.0.1:8080/mvc/login");
                    $this->home('http://127.0.0.1:8080/mvc/login', $data);
                }   
                
            }
            
        }
        
    }
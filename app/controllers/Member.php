<?php
    namespace App\Controllers;
    use App\Core\Controller;
    use App\Core\Model;
    
    class Member extends Controller {
        public function index() {
            $model = new Model;
            $data['row_index'] = $model->tampilUser();
		    $this->home('member/index', $data);
        }
    }
<?php
    namespace App\Controllers;
    use App\Core\Controller;
    use App\Core\Model;
    
    class Laporan_member extends Controller {
        public function index() {
            $model = new Model;
            $data['row_index'] = $model->tampilPelanggan();
            $data['row_user'] = $model->tampilUser();
            $data['row_home']  = $model->golongan();
		    $this->home('laporan_member/index', $data);
        }
    }
<?php
    namespace App\Controllers;
    use App\Core\Controller;
    use App\Core\Model;
    
    class Golongan extends Controller {
        public function index() {
            $model = new Model;
            $data['row_index']  = $model->tampilGolongan();
            $data['row_nama']   = $model->tampilUser();
		    $this->home('golongan/index', $data);
        }

        public function saveGolongan() {
            $gol_kode       = $_POST['gol_kode'];
            $gol_nama       = $_POST['gol_nama'];
            $model  = new Model;
            $model->tambahGolongan($gol_kode, $gol_nama);
            header("location:../golongan");
        }

        public function editGolongan(){
            $gol_id         = $_POST['gol_id'];
            $gol_kode       = $_POST['gol_kode'];
            $gol_nama       = $_POST['gol_nama'];
            $model = new Model;
            $model->editGolongan($gol_id, $gol_kode, $gol_nama);
            header("location:../golongan");
        }
        public function hapusGolongan($gol_id){
            $model = new Model;
            $model->deleteGolongan($gol_id);
            header("location:../../golongan");
        }
        
    }
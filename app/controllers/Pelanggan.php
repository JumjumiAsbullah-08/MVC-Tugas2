<?php
    namespace App\Controllers;
    use App\Core\Controller;
    use App\Core\Model;
    
    class Pelanggan extends Controller {
        public function index() {

            $model = new Model;
            $data['row_index'] = $model->tampilPelanggan();
            $data['row_home']  = $model->tampilGolongan();
            $data['row_user']  = $model->tampilUser();
            $data['row_gol']  = $model->golongan();
		    $this->home('pelanggan/index', $data);
        }

        public function savePelanggan() {
            $pel_id_gol     = $_POST['pel_id_gol'];
            $pel_nama       = $_POST['pel_nama'];
            $pel_alamat     = $_POST['pel_alamat'];
            $pel_hp         = $_POST['pel_hp'];
            $pel_ktp        = $_POST['pel_ktp'];
            $pel_ser        = $_POST['pel_ser'];
            $pel_meteran    = $_POST['pel_meteran'];
            $pel_aktif      = $_POST['pel_aktif'];
            $pel_id_user    = $_POST['pel_id_user'];

            $model  = new Model;
            $model->tambahPelanggan($pel_id_gol, $pel_nama, $pel_alamat, $pel_hp, $pel_ktp, $pel_ser, $pel_meteran, $pel_aktif, $pel_id_user);
            header("location:../pelanggan");
        }
        public function hapusPelanggan($pel_id){
            $model = new Model;
            $model->deletePelanggan($pel_id);
            header("location:../../pelanggan");
        }
        public function editPelanggan(){
            $pel_id         = $_POST['pel_id'];
            $pel_id_gol     = $_POST['pel_id_gol'];
            $pel_no         = $_POST['pel_no'];
            $pel_nama       = $_POST['pel_nama'];
            $pel_alamat     = $_POST['pel_alamat'];
            $pel_hp         = $_POST['pel_hp'];
            $pel_ktp        = $_POST['pel_ktp'];
            $pel_ser        = $_POST['pel_ser'];
            $gol_nama       = $_POST['gol_nama'];
            $model = new Model;
            $model->editGolongan($gol_id, $gol_kode, $gol_nama);
            header("location:../golongan");
        }
    }
<?php

namespace App\Core;

use PDO;

class Model
{

	protected object $db;

	public function __construct()
	{

		try {

			$this->db = new PDO("mysql:host=localhost;dbname=db_pln", "root", "");
		} catch (Exception $e) {
			die("error! " . $e->getMessage());
		}
	}
	// start kode register
	public function insertUser($user_email, $user_password, $user_nama, $user_alamat, $user_hp, $user_pos) {
		$sql = "INSERT INTO tb_users SET user_email='$user_email', user_password='$user_password', user_nama='$user_nama', user_alamat='$user_alamat', user_hp='$user_hp',user_pos='$user_pos'";
		$stmt   = $this->db->prepare($sql);
        $stmt->execute();
	}
	public function tampilUser(){
		$sql    = "SELECT user_id, user_email, user_nama FROM tb_users";
        $stmt   = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
	}
	// end kode register

	//start kode login
	public function formMasuk($user_email, $user_password){
		$sql 	= "SELECT * FROM tb_users WHERE user_email='$user_email' AND user_password='$user_password'";
		$stmt	= $this->db->prepare($sql);
		$stmt->execute(); 
		$ada = $stmt->rowCount();
		if($ada > 0){
			return $hasil = $stmt->fetch();
		}
		else{
			return 'gagal';
		}
	}
	//end kode login

	// start kode golongan
		public function tambahGolongan($gol_kode, $gol_nama) {
		$sql = "INSERT INTO tb_golongan SET gol_kode='$gol_kode', gol_nama='$gol_nama'";
		$stmt   = $this->db->prepare($sql);
        $stmt->execute();
	}
	public function golongan(){
		$sql    = "SELECT gol_nama FROM tb_golongan LIMIT 1";
        $stmt   = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
	}
	public function tampilGolongan(){
		$sql    = "SELECT gol_id, gol_kode, gol_nama FROM tb_golongan";
        $stmt   = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
	}
	public function editGolongan($gol_id, $gol_kode, $gol_nama){
		$sql    = "UPDATE tb_golongan SET gol_kode='$gol_kode', gol_nama='$gol_nama' WHERE gol_id='$gol_id'";
        $stmt   = $this->db->prepare($sql);
        $stmt->execute();

        $row = $stmt->fetch();
		return $row;
	}
	public function deleteGolongan($gol_id){
		$sql    = "DELETE FROM tb_golongan WHERE gol_id='$gol_id'";
		$stmt   = $this->db->prepare($sql);
        $stmt->execute();
	}
	//end kode golongan

	//start kode pelanggan
	
	public function tampilPel_id(){
		$sql    = "SELECT pel_id_gol FROM tb_pelanggan LIMIT 1";
        $stmt   = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
	}
	public function tampilPelanggan(){
		$sql    = "SELECT pel_id_gol, pel_no, pel_nama, pel_alamat, pel_hp, pel_ktp, pel_ser, pel_meteran, pel_aktif, pel_id_user FROM tb_pelanggan";
        $stmt   = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
	}
	public function tambahPelanggan($pel_id_gol, $pel_nama, $pel_alamat, $pel_hp, $pel_ktp, $pel_ser, $pel_meteran, $pel_aktif, $pel_id_user) {
		$sql = "INSERT INTO tb_pelanggan SET pel_id_gol='$pel_id_gol', pel_nama='$pel_nama', pel_alamat='$pel_alamat', pel_hp='$pel_hp', pel_ktp='pel_ktp', pel_ser='$pel_ser', pel_meteran='$pel_meteran', pel_aktif='$pel_aktif', pel_id_user='$pel_id_user'";
		$stmt   = $this->db->prepare($sql);
        $stmt->execute();
	}
	public function deletePelanggan($pel_id){
		$sql    = "DELETE FROM tb_pelanggan WHERE pel_id='$pel_id'";
		$stmt   = $this->db->prepare($sql);
        $stmt->execute();
	}
	//end kode pelanggan
}
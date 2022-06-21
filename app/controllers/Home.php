<?php

namespace App\Controllers;
use App\Core\Model;
use App\Core\Controller;

class Home extends Controller
{

	public function index()
	{
		$model = new Model;
		$data['row_index'] = "";
		$this->home('home/index', $data);
	}

	public function saveData() {
		$user_email     = $_POST['user_email'];
		$user_password  = $_POST['user_password'];
		$user_nama      = $_POST['user_nama'];
		$user_alamat    = $_POST['user_alamat'];
		$user_hp        = $_POST['user_hp'];
		$user_pos       = $_POST['user_pos'];
		$model  = new Model;
		$model -> insertUser($user_email, $user_password, $user_nama, $user_alamat, $user_hp, $user_pos);
		header("location:../login");
	}
}
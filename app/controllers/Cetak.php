<?php

namespace App\Controllers;
use App\Core\Model;
use App\Core\Controller;

class Cetak extends Controller
{

	public function index()
	{
		$model = new Model;
		$data['row_index'] = $model->tampilPelanggan();
		$data['row_home']  = $model->golongan();
		$data['row_user']  = $model->tampilUser();
		$this->home('cetak/index', $data);
	}
}
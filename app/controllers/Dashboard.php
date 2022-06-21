<?php

namespace App\Controllers;

use App\Core\Controller;

class Dashboard extends Controller
{

	public function index()
	{
		$data['row_index'] = "Ini file app/controllers/Dashboard.php - index()";
		$this->dashboard('dashboard/index', $data);
	}
}
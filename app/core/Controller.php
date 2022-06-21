<?php

namespace App\Core;

class Controller
{
	// Layout sign
	public function home($view, $data = [])
	{
		require_once ROOT . "layouts/sign.php";
	}
	//layout Login
	public function login($view, $data = [])
	{
		require_once ROOT . "layouts/login.php";
	}

	// layout dashboard
	public function dashboard($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}

	// layout golongan
	public function golongan($view, $data = [])
	{
		require_once ROOT . "layouts/golongan.php";
	}

	//layout pelanggan
	public function pelanggan($view, $data = [])
	{
		require_once ROOT . "layouts/pelanggan.php";
	}

	//layout laporan admin
	public function laporan_admin($view, $data = [])
	{
		require_once ROOT . "layouts/laporan_admin.php";
	}

	//layout cetak
	public function cetak($view, $data = [])
	{
		require_once ROOT . "layouts/cetak.php";
	}

	//layout member
	public function member($view, $data = []){
		require_once ROOT . "layouts/member.php";
	}

	//layout laporan member
	public function laporan_member($view, $data = []){
		require_once ROOT . "layouts/laporan_member.php";
	}

}
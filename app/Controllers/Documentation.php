<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Documentation extends BaseController
{
	public function index()
	{
    $data = [
      'page' => 'Dashboard'
    ];
		return view('dokumentasi/index',$data);
	}

  public function menu($menu)
	{
    $data = [
      'page' => $menu
    ];
		return view('dokumentasi/'.$menu,$data);
	}
}

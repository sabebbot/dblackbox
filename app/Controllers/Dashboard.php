<?php namespace App\Controllers;

use \App\Models\Dashboard_Model;
use CodeIgniter\Exceptions\PageNotFoundException;

class Dashboard extends BaseController
{

	public function index()
	{
        
		echo view('Dadmin/index');
       # $news = new News();
       # $data['news'] = $news->findAll();
	   # echo view('Dadmin/index', $data);
    }
}
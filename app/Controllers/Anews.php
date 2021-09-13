<?php

namespace App\Controllers;
use App\Models\Admin_news;
use CodeIgniter\RESTful\ResourceController;

class Anews extends ResourceController
{
	private $news;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        $this->news = new Admin_news();     
    }
	public function index()
	{
		$news = $this->news->orderBy('id', 'title',)->findAll();
        return view('Dadmin/m_news', compact('news'));
	}


	/**
	 * Return a new resource object, with default properties
	 *
	 * @return mixed
	 */
	public function new()
	{
		return view('Dadmin/create');
	}
	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function create()
	{
		$inputs = $this->validate([
            'title' => 'required',
            'seo_title' => 'required',
            'content1' => 'required',
            'url' => 'required',
            'file' => 'required',

        ]);

        if (!$inputs) {
            return view('Dadmin/create', [
                'validation' => $this->validator
            ]);
        }

        $this->news->save([
            'title' => $this->request->getVar('title'),
            'seo_title'  => $this->request->getVar('seo_title'),
            'content'  => $this->request->getVar('content'),
            'id_category'  => $this->request->getVar('id_category'),
            'url'  => $this->request->getVar('url'),
            'file'  => $this->request->getVar('file'),

        ]);
        session()->setFlashdata('success', 'Success! post created.');
        return redirect()->to(site_url('Anews/m_news'));
    }


	
	public function edit($id = null)
	{
		$news = $this->news->find($id);
        if($news) {
            return view('Dadmin/edit', compact('news'));
        }
        else {
            session()->setFlashdata('failed', 'Alert! no post found.');
            return redirect()->to('a');
        }
	}

	public function update($id = null)
	{
		$inputs = $this->validate([
            'title' => 'required',
            'seo_title' => 'required',
            'content1' => 'required',
            'url' => 'required',
            'file' => 'required',
        ]);

        if (!$inputs) {
            return view('Dadmin/m_news', [
                'validation' => $this->validator
            ]);
        }

        $this->news->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'seo_title'  => $this->request->getVar('seo_title'),
            'content1'  => $this->request->getVar('content'),
            'id_category'  => $this->request->getVar('id_category'),
            'url'  => $this->request->getVar('url'),
            'file'  => $this->request->getVar('file'),
        ]);
        session()->setFlashdata('success', 'Success! post updated.');
        return redirect()->to(base_url('Dadmin/m_news'));
	}


	public function delete($id = null)
	{
		$this->news->delete($id);
        session()->setFlashdata('success', 'Success! post deleted.');
        return redirect()->to(base_url('Anews/index'));
    }
	
}

<?php namespace App\Controllers;

use \App\Models\NewsModel;
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
    
	public function berita()
	{
        $news = new NewsModel();
        $data['newses'] = $news->findAll();
		echo view('Dadmin/m_news', $data);
    }

    //--------------------------------------------------------------------------
    
    public function preview($id)
	{
		$news = new NewsModel();
		$data['newses'] = $news->where('id', $id)->first();
		
		if(!$data['news']){
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('D_admin/news_detail', $data);
    }

    //--------------------------------------------------------------------------
    
    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $news = new NewsModel();
            $news->insert([
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status'),
                "seo_title" => $this->request->getPost('seo_title')
            ]);
            return redirect('Dadmin/m_news');
        }
		
        // tampilkan form create
        echo view('Dadmin/create_news');
    }

    //--------------------------------------------------------------------------
    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $news = new NewsModel();
        $data['Dadmin/berita'] = $news->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'title' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $news->update($id, [
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect('Dadmin/m_news');
        }

        // tampilkan form edit
        echo view('Dadmin/edit_news', $data);
    }

    //--------------------------------------------------------------------------

	public function delete($id){
        $news = new NewsModel();
        $news->delete($id);
        return redirect('Dadmin/m_news');
    }


}
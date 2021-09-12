<?php

namespace App\Controllers;

use App\Models\News;
use App\Models\Banner;

class Pages extends BaseController
{
    protected $news;
    protected $banner;
    public function __construct()
    {
        $this->news = new News();
        $this->banner = new Banner();
    }
    public function index()
    {
        $data  = [
            'title' =>  'News',
            'news' => $this->news->getNews(),
            'new' => $this->news->getNew(),
            'last' => $this->news->getLast(),
            'banner' => $this->banner->findAll()
        ];
        echo view('layouts/app', $data);
        echo view('layouts/navbar');
        echo view('pages/news', $data);
        echo view('layouts/footer', $data);
    }
    public function detail($seo_title)
    {
        $row = $this->news->getDetail($seo_title);
        if ($row) {
            $data  = [
                'title' =>  '',
                'news'   => $row,
                'new' => $this->news->getNew(),
                'last' => $this->news->getLast()
            ];
            echo view('layouts/app', $data);
            echo view('layouts/navbar');
            echo view('pages/detail', $data);
            echo view('layouts/footer', $data);
        } else {
            redirect(base_url('home'));
        }
    }


    public function category($slug)
    {
        $data  = [
            'title' =>  $slug,
            'news'   => $this->news->getAllcategory($slug),
            'new' => $this->news->getNew(),
            'last' => $this->news->getLast()
        ];
        echo view('layouts/app', $data);
        echo view('layouts/navbar');
        echo view('pages/news', $data);
        echo view('layouts/footer', $data);
    }
}

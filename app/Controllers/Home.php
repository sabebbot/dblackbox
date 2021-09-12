<?php

namespace App\Controllers;

use App\Models\News;
use App\Models\Banner;

class Home extends BaseController
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
			'news' => $this->news->getTranding(),
			'history' => $this->news->getHistory(),
			'highlight' => $this->news->getHighlight(),
			'banner' => $this->banner->findAll()
		];
		return view('index', $data);
	}
}

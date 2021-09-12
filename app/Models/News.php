<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class News extends Model
{
    public function getNews()
    {
        return $this->db->table('news')
            ->join('category', 'category.id=news.id_category')
            ->orderBy('created_at', 'desc')
            ->get()->getResultArray();
    }

    public function getNew()
    {
        return $this->db->table('news')
            ->join('category', 'category.id=news.id_category')
            ->orderBy('created_at', 'desc')
            ->limit(1)
            ->get()->getResultArray();
    }

    public function getHistory()
    {
        return $this->db->table('news')
            ->join('category', 'category.id=news.id_category')
            ->where('slug', 'history')
            ->orderBy('created_at', 'desc')
            ->limit(2)
            ->get()->getResultArray();
    }

    public function getTranding()
    {
        return $this->db->table('news')
            ->join('category', 'category.id=news.id_category')
            ->orderBy('created_at', 'desc')
            ->limit(2)
            ->get()->getResultArray();
    }

    public function getLast()
    {
        return $this->db->table('news')
            ->join('category', 'category.id=news.id_category')
            ->limit(4)
            ->get()->getResultArray();
    }

    public function getHighlight()
    {
        return $this->db->table('news')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get()->getResultArray();
    }

    public function getDetail($seo_title)
    {
        return $this->db->table('news')
            ->join('category', 'category.id=news.id_category')
            ->where('seo_title', $seo_title)
            ->get()->getRowArray();
    }

    public function getAllcategory($slug)
    {
        return $this->db->table('news')
            ->join('category', 'category.id=news.id_category')
            ->where('slug', $slug)
            ->get()->getResultArray();
    }
}

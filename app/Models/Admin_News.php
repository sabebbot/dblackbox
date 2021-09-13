<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_News extends Model
{
    protected $table = 'news';
     
    public function getNews($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }
 
}
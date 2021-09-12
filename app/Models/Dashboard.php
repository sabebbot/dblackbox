<?php

namespace App\Models;

use CodeIgniter\Model;

class dashboard extends Model
{
   
    protected $table      = 'news';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['title','seo_title', 'content','url','file', 'status'];

}
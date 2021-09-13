<?php

namespace App\Models;

use CodeIgniter\Model;

class Dashboard extends Model
{
    protected $table = 'news'; 
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = ['title', 'seo_title','content','id_category','url','file'];
    protected $useTimestamps = false;

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}
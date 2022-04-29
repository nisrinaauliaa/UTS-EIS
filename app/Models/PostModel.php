<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'post';
    protected $primaryKey       = 'post_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['foto', 'caption'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class Filme_m extends Model
{
    protected $DBGroup              =   'default';
    protected $table                =   'filme';
    protected $primaryKey           =   'id_filme';
    protected $useAutoIncrement     =   true;
    protected $insertID             =   0;
    protected $returnType           =   'array';
    protected $useSoftDeletes       =   true;
    protected $protectFields        =   true;
    protected $allowedFields        =   [
        'titulo',
        'sinopse',
        'imagem'
    ];
      
    //Dates
    protected $useTimestamps        =   true;
    protected $dateFormat           =   'datetime';
    protected $createdField         =   'created_at';
    protected $updatedField         =   'updated_at';
    protected $deletedField         =   'deleted_at';

   
	
	
}

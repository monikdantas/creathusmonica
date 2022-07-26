<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuario_m extends Model
{
    protected $DBGroup              =   'default';
    protected $table                =   'usuario';
    protected $primaryKey           =   'id_usuario';
    protected $useAutoIncrement     =   true;
    protected $insertID             =   0;
    protected $returnType           =   'array';
    protected $useSoftDeletes       =   true;
    protected $protectFields        =   true;
    protected $allowedFields        =   [
        'nome',
        'email',
        'senha'
    ];
      
    //Dates
    protected $useTimestamps        =   true;
    protected $dateFormat           =   'datetime';
    protected $createdField         =   'created_at';
    protected $updatedField         =   'updated_at';
    protected $deletedField         =   'deleted_at';

   
	
	
}

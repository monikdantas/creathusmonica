<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Controllers\BaseController;

use CodeIgniter\Files\File;

use App\Models\Filme_m;

class Filme extends BaseController
{

   private $filmeModel;
 
   public function __construct(){
		$this->filmeModel = new Filme_m;
   }
	
	public function index()
	{		
		$dados['titulo'] 	= 	'Creathus :: Filmes';		
        $filmes = $this->filmeModel->findAll();
        $dados['filmes'] = $filmes;
  
        return view('administracao/filme_v',$dados);
    }

    public function novo_filme()
	{		
		$dados['titulo'] 	= 	'Creathus :: Filmes';		
        //$filmes = $this->filmeModel->findAll();
        //$dados['filmes'] = $filmes;
  
        return view('administracao/form_filme_v',$dados);
    }

    public function editar_filme($id)
	{		
        return view('administracao/form_filme_v', [
            'titulo' 	=> 	'Creathus :: Filmes',
            'filme' => $this->filmeModel->find($id)
        ]);
    }


    public function salvar()
	{		

        $img = $this->request->getFile('capa');
        
        if ($this->filmeModel->save($this->request->getPost())){
            $dados['msg'] = "Filme salvo com sucesso!";
            $id_filme = $this->request->getPost('id_filme');
            echo "oi". $this->filmeModel->getInsertID();

            if ($id_filme != 0){ 
                $id = $id_filme;
             }
            
             if ($this->filmeModel->getInsertID() != 0){ 
                $id = $this->filmeModel->getInsertID();
             }
         
        
            $nome = $id.'.jpg';
            
            $this->filmeModel
                ->where('id_filme', $id)
                ->set(['imagem' => $nome])
                ->update();
            $this->upload($img, $nome);
            return $this->index();
        }
    }

   

    public function upload($img, $nome)
    {

        if ($img== ""){
        } else{
            if (! $img->hasMoved()) {
                
                $filename = ROOTPATH . 'public/assets/filmes/' . $nome;
               
                if (file_exists($filename)){
                    
                    unlink($filename);

                }
                $filepath = $img->move(ROOTPATH . 'public/assets/filmes', $nome);

            }
        }
        
    }


    public function excluir($id){
        if ($this->filmeModel->delete($id)){
            return $this->index();

        }
    }

    public function filmes_lancamentos (){
        $filmes = $this->filmeModel
        ->orderBy('created_at', 'desc')
        ->findAll(limit, 10);
        return $filmes;

    }
    

}
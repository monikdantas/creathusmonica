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
        //$this->mover_img($img);
        if ($this->filmeModel->save($this->request->getPost())){
            $dados['msg'] = "Filme salvo com sucesso!";
            $id_filme = $this->request->getPost('id_filme');
            $id = isset($id_filme) ? $id_filme : $this->filmeModel->getInsertID();
            $nome = $id.'.jpg';

            //echo "ID:".$id."/NOME ARQUIVO:".$nome;
            
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

       /* $validationRule = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => 'uploaded[userfile]'
                    . '|is_image[userfile]'
                    . '|mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[userfile,200]'
                    . '|max_dims[userfile,1024,768]',
            ],
        ];
        if (! $this->validate($validationRule)) {
            echo "\ nao validou";
            $data = ['errors' => $this->validator->getErrors()];

            //return view('login_v', $data);
        }*/
      

        if (! $img->hasMoved()) {
            //$filepath = WRITEPATH . 'uploads/imagens/'. $img->store();
            $filepath = $img->move(ROOTPATH . 'public/assets/filmes', $nome);

           // $filepath = $img->store(WRITEPATH . 'uploads/', 'user_name.jpg');
           //$filepath = $img->move(ROOTPATH . 'public/assets/filmes', 'ult_teste.jpg');


            //$filepath = WRITEPATH . base_url('imagens/') . $img->store();

           // $data = ['uploaded_flleinfo' => new File($filepath)];

            //return view('upload_success', $data);
            //return $img;
        }
        $data = ['errors' => 'The file has already been moved.'];

        //return view('login_v', $data);
    }

    public function excluir($id){
        if ($this->filmeModel->delete($id)){
            return $this->index();

        }
    }


    

}
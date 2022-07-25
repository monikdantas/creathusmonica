<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Controllers\BaseController;

use App\Models\Usuario_m;

class Usuario extends BaseController
{

   private $usuarioModel;
 
   public function __construct(){
		$this->usuarioModel = new Usuario_m;
   }
	
	public function index()
	{		
        $dados['titulo'] 	= 	'Creathus :: Usuários';		
        $usuarios = $this->usuarioModel->findAll();
        $dados['usuarios'] = $usuarios;

        //return view('login_v',$dados);
        //return view('login_v', ['errors' => []]);
        return view('administracao/usuario_v',$dados);
    }

    public function upload()
    {
        $validationRule = [
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
            $data = ['errors' => $this->validator->getErrors()];

            return view('login_v', $data);
        }

        $img = $this->request->getFile('userfile');

        if (! $img->hasMoved()) {
            //$filepath = WRITEPATH . 'uploads/imagens/'. $img->store();

           // $filepath = $img->store(WRITEPATH . 'uploads/', 'user_name.jpg');
           $filepath = $img->move(ROOTPATH . 'public/assets/filmes', 'ult_teste.jpg');

            echo $filepath;

            //$filepath = WRITEPATH . base_url('imagens/') . $img->store();

            $data = ['uploaded_flleinfo' => new File($filepath)];

            return view('upload_success', $data);
        }
        $data = ['errors' => 'The file has already been moved.'];

        return view('login_v', $data);
    }

    public function inicio_adm()
	{		
        $dados['titulo'] 	= 	'Creathus :: Início';		
        //$usuarios = $this->usuarioModel->findAll();
        //$dados['usuarios'] = $usuarios;
  
        return view('administracao/inicio_v',$dados);
    }

    public function inicio_usuario()
	{		
        $dados['titulo'] 	= 	'Creathus :: Início';		
        //$usuarios = $this->usuarioModel->findAll();
        //$dados['usuarios'] = $usuarios;
  
        return view('usuario/inicio_v',$dados);
    }

    public function cadastrar()
	{		
        $dados['titulo'] 	= 	'Creathus :: Cadastro';		
        //$usuarios = $this->usuarioModel->findAll();
        //$dados['usuarios'] = $usuarios;
  
        return view('usuario/cadastro_v',$dados);
    }

    public function autenticar()
	{		
		$dados['titulo'] 	= 	'Creathus Filmes';
		
        $usuario = $this->usuarioModel->findAll();

       /* return view ('usuarios_v', [
            'usuarios' => $usuario
        ]);*/

       //return view('login_v', $dados);

       return view('inicio_v', $dados);
        
    }

    public function salvar()
	{		
        if ($this->usuarioModel->save($this->request->getPost())){
            $dados['msg'] = "Usuário salvo com sucesso!";
            return $this->index();
        }
    }

    public function excluir($id){
        if ($this->usuarioModel->delete($id)){
            return $this->index();

        }
    }

    public function sair(){
        session()->destroy();
        return redirect()->to(site_url('login'));
    }
}

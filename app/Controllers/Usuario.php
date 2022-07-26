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

    

    public function inicio_adm()
	{		
        $dados['titulo'] 	= 	'Creathus :: Início';		
        //$usuarios = $this->usuarioModel->findAll();
        //$dados['usuarios'] = $usuarios;
  
        return view('administracao/inicio_v',$dados);
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

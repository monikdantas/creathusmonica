<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Controllers\BaseController;

use App\Controllers\Usuario;

use App\Models\Usuario_m;

use App\Models\Filme_m;

class Login extends BaseController 
{

   private $usuarioModel;
   private $filmeModel;
 
   public function __construct(){
		$this->usuarioModel = new Usuario_m;
        $this->filmeModel = new Filme_m;
   }
	
	public function index()
	{		
        $dados['titulo'] 	= 	'Creathus :: Entrar';		

        return view('login_v',$dados);
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
        
        
        $filmes = $this->filmeModel
        ->orderBy('created_at', 'desc')
        ->findAll(10);
        $dados['filmes'] = $filmes;

        $destaques = $this->filmeModel
        ->orderBy('created_at', 'desc')
        ->findAll(3);
        $dados['destaques'] = $filmes;
       
        return view('usuario/inicio_v',$dados);
    }

    public function visualizar_filme($id)
	{		
        return view('usuario/visualizar_filme_v', [
            'titulo' 	=> 	'Creathus :: Filmes',
            'filme' => $this->filmeModel->find($id)
        ]);
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

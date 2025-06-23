<?php
namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller{

	public function __construct(){
		   helper(['form', 'url']);
	}
	public function create() {

		$data['titulo']='Registro';
		echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registrarse');
        echo view('front/footer_view');
	}

	public function formValidation() {

		$input = $this->validate([
			'nombre'   => 'required|min_length[3]',
			'apellido' => 'required|min_length[3]|max_length[25]',
			'usuario'  => 'required|min_length[3]',
			'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
			'pass'     => 'required|min_length[3]|max_length[10]'],
			 // 👇 Mensajes personalizados en español		 
	        [
		    'nombre' => ['required'=>'El nombre es obligatorio.','min_length'=>'El nombre debe tener al menos 3 caracteres.'], 
            'apellido' => ['required'=>'El apellido es obligatorio.','min_length'=>'El apellido debe tener al menos 3 caracteres.','max_length'=>'El apellido no puede superar los 25 caracteres.'],
    'usuario' => ['required'=>'El nombre de usuario es obligatorio.','min_length'=>'El usuario debe tener al menos 3 caracteres.'],
    'email' => ['required'=>'El correo electrónico es obligatorio.','min_length'=>'El correo debe tener al menos 4 caracteres.','max_length'=>'El correo no puede superar los 100 caracteres.','valid_email'=>'Debes ingresar un correo electrónico válido.','is_unique'=>'Este correo ya está registrado.'],
    'pass' => ['required'=>'La contraseña es obligatoria.','min_length'=>'La contraseña debe tener al menos 3 caracteres.','max_length'=>'La contraseña no puede superar los 10 caracteres.'] 
    ]);

	$formModel = new usuario_Model();

		if (!$input) {
			$data['titulo']='Registro';
			echo view('front/head_view',$data);
            echo view('front/navbar_view');
            echo view('back/usuario/registrarse', ['validation' => $this->validator]);
            echo view('front/footer_view');
		} else {
			$formModel->save([
				'nombre'   => $this->request->getVar('nombre'),
			    'apellido' => $this->request->getVar('apellido'),
			    'usuario'  => $this->request->getVar('usuario'),
			    'email'    => $this->request->getVar('email'),
			    'pass'     => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
			]);
			session()->setFlashdata('success','Usuario registrado con exito');
		 return redirect()->to('/login');
		}
	}
} 

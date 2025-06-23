<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FiltersInterface;

/**
 * 
 */
class Auth implements FiltersInterface
{
	
public function before(RequestInteface $request, $arguments = null)
{
		// si el usuario no esta logueado
	if(!session()->get('logged_in')){
		//entonces redirecciona a la pagina de login page
		return redirect()->to('/login'); 
	}
}

public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
{
	//do something here
}
}
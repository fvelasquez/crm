<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
		
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		$this->load->view('loginform');
		
	}
	
	public function validate()
	{
		$this->load->library('session');
		
		$r['test'] = 'test';
		$this->db->where('email',$_POST['email']);
		$this->db->where('password',$_POST['password']);
		$query = $this->db->get('usuarios');
		$i = 0;
		
		foreach ($query->result() as $row)
		{
		 	$ses['email'] = $row->email;
		 	$ses['nombre'] = $row->nombre;
		 	$ses['tipo'] = $row->tipo;
		 	$ses['uid'] = $row->id;
		 	$i++;
		}
		
		if($i > 0){
			$this->session->set_userdata($ses);
			redirect('dashboard');
		}else{
			redirect('login');
		}
				
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
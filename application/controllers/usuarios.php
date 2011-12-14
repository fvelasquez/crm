<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

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
		
		$data['query'] = $this->db->get('usuarios');
		$this->load->view('usuarios_admin',$data);
		
	}
	
	public function crear()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		
		$this->load->view('usuarios_crea');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
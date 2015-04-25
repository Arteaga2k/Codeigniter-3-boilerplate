<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller
{

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
			$data['variable'] 		= "Hello World";
			$data['description'] 	= "CodeIgniter 3.0 + HMVC + Twig 1.18.1"; 
			$this->twig->display('view.twig', $data);
		}

		public function say()
		{
				return "Hi";
		}
}

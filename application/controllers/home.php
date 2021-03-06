<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/** $this->load->view('welcome_message'); */
		$this->load->view('header');
		$this->load->view('modals');
		$this->load->view('navbar');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function test()
	{
		$this->load->view('header');
	}

	public function messagesent()
	{
		echo "<h2>Message Sent</h2>";
	}

	public function forgotpassword()
	{
		echo "<h2>Forgot Password</h2>";
	}

/** http://localhost/AMPROprints/index.php/welcome/test
PARA PROBAR UNA FUNCION INDIVIDUALMENTE
	public function test()
	{
		$this->load->view('header');
	} */
}
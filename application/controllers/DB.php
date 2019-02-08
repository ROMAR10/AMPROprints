<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DB extends CI_Controller {

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
		$this->load->view('DBheader');
		$this->load->view('DBhome');
		$this->load->view('footer');
	}

	public function customers()
	{
		$this->load->view('DBheader');
		$this->load->view('modals');
		$this->load->view('DBcustomersNavbar');
		$this->load->view('DBcustomers');
		$this->load->view('footer');
	}

	public function employees()
	{
		$this->load->view('DBheader');
		$this->load->view('modals');
		$this->load->view('DBemployeesNavbar');
		$this->load->view('DBemployees');
		$this->load->view('footer');
	}

	public function products()
	{
		$this->load->view('DBheader');
		$this->load->view('modals');
		$this->load->view('DBproductsNavbar');
		$this->load->view('DBproducts');
		$this->load->view('footer');
	}

	public function suppliers()
	{
		$this->load->view('DBheader');
		$this->load->view('modals');
		$this->load->view('DBsuppliersNavbar');
		$this->load->view('DBsuppliers');
		$this->load->view('footer');
	}
}
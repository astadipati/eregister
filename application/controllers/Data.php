<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('content/register');
		$this->load->view('template/footer');
	}
}

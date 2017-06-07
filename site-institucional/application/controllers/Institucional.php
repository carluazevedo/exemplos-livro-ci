<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institucional extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function empresa()
	{
		$this->load->view('empresa');
	}

	public function servicos()
	{
		$this->load->view('servicos');
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('console');
	}
	
	public function index()
	{	 
		$this->load->view('welcome_message');
	} 
	

	public function get($id=null,$id2=null,$id3=null)
	{
		echo 'get';
		console::log($id);
		console::log($id2);
		console::log($id3);
	} 
}

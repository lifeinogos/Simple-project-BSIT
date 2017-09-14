	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bootstrap extends CI_Controller {

	// public function __construct(){
		//model name & nickname
		// $this->load->model('students_model','students');
	// }
	
	public function __construct(){
		parent::__construct();
		$this->load->model('students_model','students');
	}
	public function index()
	{
		echo 'bootstrap controller';	
	}
	
}

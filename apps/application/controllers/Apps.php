<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {

	 
	public function index()
	{
		$data['pages'] = 'home';
        $this->load->view('template',$data);
	}
}

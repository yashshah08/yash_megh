<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Custom404 extends Front_Controller
{
	function __construct()
    {
        parent::__construct();	
    }

	function index()
	{
		$data['main'] = 'error404';
		$data['websitepagename'] = 'error404';
		$this->load->vars($data);
		$this->load->view('template/innermaster');
	}  
}
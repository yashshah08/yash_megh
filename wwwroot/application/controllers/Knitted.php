<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class knitted extends Front_Controller
{
	function __construct()
    {
        parent::__construct();	
    }

	function index()
	{
		$data['main'] = 'knitted';
		$data['websitepagename'] = 'knitted';
		$this->load->vars($data);
		$this->load->view('template/innermaster');
	}
	function sofpac()
	{
		$data['main'] = 'sofpac';
		$data['websitepagename'] = 'sofpac';
		$this->load->vars($data);
		$this->load->view('template/innermaster');
	}
	
}

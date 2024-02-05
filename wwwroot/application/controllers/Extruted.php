<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class extruted extends Front_Controller
{
	function __construct()
    {
        parent::__construct();	
    }

	function index()
	{
		$data['main'] = 'extruted';
		$data['websitepagename'] = 'extruted';
		$this->load->vars($data);
		$this->load->view('template/innermaster');
	}
	function diamond()
	{
		$data['main'] = 'diamond';
		$data['websitepagename'] = 'diamond';
		$this->load->vars($data);
		$this->load->view('template/innermaster');
	}
	function sqaure()
	{
		$data['main'] = 'sqaure';
		$data['websitepagename'] = 'sqaure';
		$this->load->vars($data);
		$this->load->view('template/innermaster');
	}
}

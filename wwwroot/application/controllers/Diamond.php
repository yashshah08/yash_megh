<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class diamond extends Front_Controller
{
	function __construct()
    {
        parent::__construct();	
    }

	function index()
	{
		$data['main'] = 'diamond';
		$data['websitepagename'] = 'diamond';
		$this->load->vars($data);
		$this->load->view('template/innermaster');
	}
	function protective_sleeves()
	{
		$data['main'] = 'protective_sleeves';
		$data['websitepagename'] = 'protective_sleeves';
		$this->load->vars($data);
		$this->load->view('template/innermaster');
	}
	function filter_nets_and_mesh()
	{
		$data['main'] = 'filter_nets_and_mesh';
		$data['websitepagename'] = 'filter_nets_and_mesh';
		$this->load->vars($data);
		$this->load->view('template/innermaster');
	}
	function extruded_nets()
	{
		$data['main'] = 'extruded_nets';
		$data['websitepagename'] = 'extruded_nets';
		$this->load->vars($data);
		$this->load->view('template/innermaster');
	}
	function bud_caps()
	{
		$data['main'] = 'bud_caps';
		$data['websitepagename'] = 'bud_caps';
		$this->load->vars($data);
		$this->load->view('template/innermaster');
	}

	function bodyloofah()
	{
		$data['main'] = 'bodyloofah';
		$data['websitepagename'] = 'bodyloofah';
		$this->load->vars($data);
		$this->load->view('template/innermaster');
	}
	
	
}

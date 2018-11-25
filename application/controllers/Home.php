<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('home_model');
		$products = $this->home_model->getHomeData();
		$this->load->view('home',['products' => $products]);
	}
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Year extends CI_Controller {
public function __construct()
	{
	parent:: __construct();
	$this->load->model('year_model');
	$this->load->helper('url');
	}
public function view($page='Year')
{
	$data['tab']=$page;
	$data['movies']=$this->year_model-> get_movies();
	$data['numberofyear']=$this->year_model->get_num_rows();
	$this->load->view('templates/header', $data);
	$this->load->view('templates/year',$data);
}
public function choosen($choose)
{
	$data['tab']=$choose;
	$data['movies']=$this->year_model->get_movies_year($choose);
	$data['numberofmovies']=$this->year_model->get_num_rows();
	$this->load->view('templates/header',$data);
	$this->load->view('movies/movies', $data);
}


}
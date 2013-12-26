
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movies extends CI_Controller {
public function __construct()
	{
		parent:: __construct();
		$this->load->model('movies_model');
		$this->load->helper('url');
	}
public function view($page='home')
	{
    $data['tab']=$page;
    $data['movies']=$this->movies_model-> get_movies();
    $data['numberofmovies']=$this->movies_model->get_num_rows();

	$this->load->view('templates/header', $data);
	$this->load->view('templates/alphabet', $data);
	$this->load->view('movies/movies', $data);
	}
public function alphabet($letter)
	{
	$data['tab']=$letter;
	$data['movies']=$this->movies_model-> get_movies_alphabet($letter);
	$data['numberofmovies']=$this->movies_model->get_num_rows();
	
	$this->load->view('templates/header', $data);
	$this->load->view('templates/alphabet', $data);
	$this->load->view('movies/movies', $data);
		
	}
 public function details_title($moviename)
 {
 	//repalce %20 with space for query
 	if(strpos($moviename,'%20')!==false)
 	{	$moviename =   str_replace("%20"," ",$moviename);}	

 	$data['tab']=$moviename;
 	$data['moviedetails']=$this->movies_model->get_movies_details_title($moviename);
    
    //check whether poster exsists for the movies 
 	$filename= $data['moviedetails'][0]['Poster'].".jpg";
        if(!file_exists($filename))
          {$filename= IMG.'assets/imgs/default.jpg';} 
        else 
          {$filename = IMG.$filename;}

    //reassign the location accordingly
    $data['moviedetails'][0]['Poster']=$filename;
	$this->load->view('templates/header', $data);
	$this->load->view('templates/alphabet', $data);
	$this->load->view('movies/moviedetails', $data);
 }
  public function details_id($movieid)
 { 	
 	$data['moviedetails']=$this->movies_model->get_movies_details_id($movieid);
    $data['tab']=$data['moviedetails'][0]['Title'];

    //check whether poster exsists for the movies 
 	$filename= $data['moviedetails'][0]['Poster'].".jpg";
   
        if(!file_exists($filename))
          { $filename= IMG.'assets/imgs/default.jpg';} 
        else 
          {$filename = IMG.$filename;}

    //reassign the location accordingly
    $data['moviedetails'][0]['Poster']=$filename;
    
   	$this->load->view('templates/header', $data);
	$this->load->view('templates/alphabet', $data);
	$this->load->view('movies/moviedetails', $data);
 }


}



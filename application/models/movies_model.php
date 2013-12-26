<?
class movies_model extends CI_Model{
	
	private $num_of_rows=0;

	public function __construct(){
		$this->load->database();
		
	}
	public function get_movies()
	{
		$sql= "select Title,Movie_Id from Movies order by Title" ;
		$query=$this->db->query($sql);
		$this->num_of_rows=$query->num_rows();
		return $query->result_array();
	}
	public function get_movies_alphabet($letter)
	{
		if(ctype_alpha($letter))
		{$sql= "select Title,Movie_Id from Movies where Title  like '".$letter."%'";}
		else
		{$sql= "select Title,Movie_Id from Movies where Title REGEXP '^[0-9].';";}
	
		$query=$this->db->query($sql);
		$this->num_of_rows=$query->num_rows();
		return $query->result_array();
	}
	public function get_movies_details_title($moviename)
	{
		$sql="select * from Movies where Title ='".$moviename."' order by Title" ;
		$query=$this->db->query($sql);
		$this->num_of_rows=$query->num_rows();
		return $query->result_array();

	}
	public function get_movies_details_id($movieid)
	{
		$sql="select * from Movies where Movie_Id ='".$movieid."' order by Title" ;
		$query=$this->db->query($sql);
		$this->num_of_rows=$query->num_rows();
		return $query->result_array();

	}
	public function get_num_rows()
	{
		return $this->num_of_rows;
	}


}
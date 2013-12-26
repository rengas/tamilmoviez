<?
class year_model extends CI_Model{
	
	private $num_of_rows=0;

	public function __construct(){
		$this->load->database();
		
	}
	public function get_movies()
	{
		$sql="select Released,count(*) as counter from Movies Group by Released";
		$query=$this->db->query($sql);
		$this->num_of_rows=$query->num_rows();
		return $query->result_array();
	}
 	public function get_movies_year($choose)
	{
		$sql="select Movie_Id,Title from Movies where Released =".$choose." order by Title";
		$query=$this->db->query($sql);
		$this->num_of_rows=$query->num_rows();
		return $query->result_array();
	}
	public function get_num_rows()
	{
		return $this->num_of_rows;
	}

}
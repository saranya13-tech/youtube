<?php 
/**
 * 
 */
class User_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function process($name = '',$password='')
	{
		if($name && $password) {
			$sql = "SELECT * FROM user WHERE name ='$name' and password='$password'";
			$result = $this->db->query($sql);

			if($result->row_array() > 0) {
				
					return $result;	
				}
				
			else {
				return false;
			}
		}
		else {
			return false;
		}
		
	}
	public function create($data)
	{
		if($data) {
			$insert = $this->db->insert('user', $data);
			return ($insert == true) ? true : false;
		}
	}
	public function add_video($data)
	{
		if($data) {
			$insert = $this->db->insert('videos', $data);
			return ($insert == true) ? true : false;
		}
	}
	public function is_logged_in()
	{
		if($this->session->userdata('id') == '' )
		{
			return false;

		}
		else
		{
			return true;
		}
	}
	public function datapost($data = '')
	{
		$query = $this->db->insert('postdata',$data);
		return $query;

	}
	public function getdetails($id)
	{
		
	  $this->db->where('user_id', $id);
			$query = $this->db->get('videos');
			return $query->result();
		

	}
	public function getuser($id)
	{
		
	  $this->db->where('id', $id);
			$query = $this->db->get('user');
			return $query->row();
		

	}
	public function update($data)
	{
		
	  $this->db->where('id', $this->session->userdata('id'));
			$query = $this->db->update('user',$data);
			return ($query== true) ? true : false;
		


	}
	function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('videos');
    }
}
?>
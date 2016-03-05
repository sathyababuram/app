<?php


class Add_task extends CI_Controller {

	public function add($data)
	{
		$this->load->database();
		
		$count = $this->db->insert('user',$data);
		if($count>0)
		{
			//echo "Successfull!";
		}
		else
		{
            echo "false";
		}
	}

	public function get_user()
	{
		$this->load->database();
		$data=$this->db->get('user');
		return $data->result();
	}

	
}

?>
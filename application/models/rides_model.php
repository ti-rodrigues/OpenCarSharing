<?php
class Rides_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_rides($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('ocs_rides');
			return $query->result_array();
		}
	
		$query = $this->db->get_where('ocs_rides', array('id' => $id));
		return $query->row_array();
	}
	
	public function set_rides()
	{
		$this->load->helper('url');
	
		$data = array(
			'departure' => $this->input->post('departure'),
			'destination' => $this->input->post('destination'),
			'date' => $this->input->post('date'),
			'time' => $this->input->post('time'),
			'user' => $this->input->post('user'),
			'description' => $this->input->post('description')
		);

	
		return $this->db->insert('ocs_rides', $data);
	}

}
?>

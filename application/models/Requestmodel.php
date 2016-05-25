<?php
class Requestmodel extends CI_Model
{

    public function do_request()
    {
        $data = array(
            'data'  => $this->input->post('data'),
            'track_id' => $this->input->post('track_id')
        );

        $this->db->insert('requests', $data);
    }

    public function getAll()
    {
			$this->db->order_by("timestamp", "asc");
			$mydate = date('Y-m-d'); 
			//$this->db->where("DATEDIFF('$mydate', timestamp) <", 1);
      return $this->db->get('requests')->result();
    }

}
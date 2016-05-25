<?php
class Requestmodel extends CI_Model
{

    public function do_request()
    {
        $data = array(
            'data'  => $this->input->post('data')
        );

        $this->db->insert('requests', $data);

        echo $data['data'];
    }

}
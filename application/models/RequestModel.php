<?php

class Requestmodel extends CI_Model
{

    public function do_request()
    {
        $data = array(
            'data' => $this->input->post('data'),
            'track_id' => $this->input->post('track_id')
        );

        $this->db->insert('requests', $data);
    }

    public function getAll()
    {
        $this->db->order_by("timestamp", "asc");
        $mydate = date('Y-m-d');
       // $this->db->where("DATEDIFF('$mydate', timestamp) <", 1);
        $this->db->where("added", 0);
      return $this->db->get('requests')->result();
    }

    public function getUnseen()
    {
        $this->load->model('PlaylistModel');
//        return $this->db->where('added', 0)->get('requests')->result();
        return $this->PlaylistModel->update_playlist();
    }

    public function setAdded($id)
    {

        foreach ($id as $request) {
            $this->db->where('track_id', $request->track_id)->update('requests', array('added' => 1))->result();
        }

        return $id;
    }

    public function getTrackIds()
    {
        $query = $this->db->get('requests');
        $arr = array();
        foreach ($query->result() as $request){
            $arr[] = $request->track_id;
        }

        return $arr;
    }

}
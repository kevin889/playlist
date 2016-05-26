<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API extends CI_Controller {

    public function search()
    {
        if(!isset($_POST['data'])) return false;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://api.deezer.com/search?q=".$_POST['data']."&order=RANKING");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output, true);
        echo json_encode(array_slice($output['data'], 0, 5));
    }

    public function getQueue()
    {
        $this->load->model('RequestModel');

        //echo json_encode($this->RequestModel->getUnseen());
//        for($i = 0; $i < count($this->RequestModel->getUnseen()); $i++){
//             var_dump((array)$this->RequestModel->getUnseen()[$i]);
//            $this->db->where('id', $this->RequestModel->getUnseen()[$i]['id'])->update('requests', array('added'=>1));
//        }
        $unseen = $this->RequestModel->getUnseen();
        $unseenArr = array();
        for($i = 0; $i < count($unseen); $i++){
            $this->db->where('track_id', $unseen[$i])->update('requests', array('added'=>1));
            $unseenArr[] = $unseen[$i];
        }

        echo json_encode($unseenArr);


    }

    public function getAdded()
    {
        $added = $this->db->where('added',1)->get('requests')->result_array();
        $addedtr = array();
        for($i = 0; $i<sizeof($added);$i++)
        {
            $addedtr[] = $added[$i]['track_id'];
        }
        echo json_encode($addedtr);
    }
}

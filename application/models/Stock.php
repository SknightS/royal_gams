<?php
class Stock extends CI_Model {



    function insertstock(){
        $p_id = $this->input->post('p_id');
        $type = $this->input->post('type');
        $weight = $this->input->post('weight');
        $price = $this->input->post('price');
        $amount = $this->input->post('amount');

        $data = array(
            'product_id' => $p_id,
            'type' => $type,
            'weight' => $weight,
            'price' => $price,
            'amount' => $amount,
        );

        $this->db->insert('stock',$data);
    }


    function showstock(){

        $query = $this->db->query("SELECT * FROM `stock`");
        return $query->result();
    }

    public function editstock(){

        $query=$this->db->query("SELECT * FROM stock ");
        return $query->result();
    }


    function test(){

        $query=$this->db->query("SELECT * FROM stock ");
        return $query->result();
    }

}
?>
<?php
class Purchase extends CI_Model {


    function insert(){

        $p_id = $this->input->post('p_id');
        $type = $this->input->post('type');
        $weight = $this->input->post('weight');
        $price = $this->input->post('price');
        $amount = $this->input->post('amount');
        $paid = $this->input->post('paid');
        $due = $this->input->post('due');
        $date =date("Y-m-d");
        $data = array(
            'product_id' => $p_id,
            'type' => $type,
            'weight' => $weight,
            'price' => $price,
            'instock' => $amount,
            'paid' => $paid,
            'due' => $due,
            'date' => $date,
        );

        $this->db->insert('purchase',$data);
    }


}
?>
<?php
class Salary extends CI_Model {



    function insertsalary(){
        $name = $this->input->post('name');
        $degn  = $this->input->post('degn');
        $salary = $this->input->post('salary');
        $pnumber = $this->input->post('pnumber');
        $address = $this->input->post('address');
        $status = $this->input->post('status');

        $data = array(
            'name' => $name,
            'desg' => $degn,
            'salary' => $salary,
            'phone' => $pnumber,
            'address' => $address,
            'status' => $status,
        );

        $this->db->insert('salary',$data);
    }


    function showsalary(){

        $query = $this->db->query("SELECT * FROM `salary`");
        return $query->result();
    }

    public function editstock($id){

        $query=$this->db->query("SELECT * FROM stock WHERE `id`= '$id'");
        return $query->result();
    }


    function edit($id){

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

        $this->db->where('id', $id);
        $this->db->update('stock', $data);

    }


    function delete($id){

        $this->db->where('id', $id);
        $this->db->delete('salary');


    }

    function search_by_id($id){

        $type="";
        $query=$this->db->query("SELECT * FROM stock WHERE `product_id`= '$id'");
        return $query->result();


    }
}
?>
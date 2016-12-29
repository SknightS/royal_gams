<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class  Home extends CI_Controller{

    public function index()
    {
        $this->load->view('home');
    }

    public function hello()
    {
        $this->load->view('home');
        //echo "this is a view";
    }

    public function submitfrom()
    {
        extract($_POST);
        extract($_GET);

        //echo $p_id;


    }

    public function addcart()
    {

        $id=$this->input->post('p_id');
        $data = array(
            'id' => $id,
            'qty' => 1,
            'price' => 39.95,
            'name' => 'T-Shirt',
            'coupon' => 'XMAS-50OFF'
        );

        $this->cart->insert($data);

       redirect(Home::get_instance());
    }

    public function removeall(){

        $this->cart->destroy();
        redirect(Home::get_instance());
    }



}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Purchasec extends CI_Controller{

    public function index()
    {

       $this->load->view('purchase');
    }



    public function insert(){

        $this->load->model('Purchase');
        $this->Purchase->insert();

    }


}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stockc extends CI_Controller{

    public function index()
    {

        if(isset($_POST['psubmit'])){
            $this->load->model('Stock');
            $this->Stock->insertstock();

            $this->load->model('Stock');
            $this->data['showst'] = $this->Stock->showstock();
            $this->load->view('stock', $this->data);


        }else{
            $this->load->model('Stock');
            $this->data['showst'] = $this->Stock->showstock();
            $this->load->view('stock', $this->data);


        }
    }

    function insertstock(){
        //$this->load->model('Stock');
        //$this->Stock->insertstock(); //WTF is this?

        //$sidebar = $this->load->view('insertproduct', '', TRUE);

        //redirect('Stockc#content2');
//        $data=array();
//        $data['baseUrl']= base_url();
//        $data['internalPage']= $this->load->view('insetproduct',$data);
        //$this->load->view('Stock',$data);
//        echo $data['internalPage'];
        // i assume inserproduct is the loading view.



        //$this->load->model('Stock');
        //$this->Stock->insertstock();

      //  $this->load->view('stock');
       // redirect(Stockc);

       // $this->load->helper('url');
       // redirect('stockc/index'); //or let say success page

       // $sidebar = $this->load->view('insertproduct', '', TRUE);
        //$data['sidebar'] = $sidebar;
        //$this->load->view('stock',$sidebar);


//        $sidebar = $this->load-view('insertproduct', '', TRUE);
//        $data['sidebar'] = $sidebar;
//        $this->load->view('stock', $data);

    }

function showedit($id){
        ?>
<!--    <script>alert("hello dolloy")</script>-->
<?php

   // print_r($id);
    $this->load->model('Stock');
    $this->data['ev'] = $this->Stock->editstock();
    $this->load->view('editview', $this->data);


      //  $this->load->library('parser');
       // $this->parser->parse('editview', $this->data);


}


}
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

    function edit($id){

        $this->load->model('Stock');
        $this->Stock->edit($id);
        redirect(Stockc);

    }

    function delete($id){

        //$id=$this->input->post('sp_id');
        $this->load->model('Stock');
        $this->Stock->delete($id);
        redirect(Stockc);

    }

    function search_by_id(){

        $id=$this->input->post('sp_id');
       // $type=$this->uri->segment(4);
        $this->load->model('Stock');
        $this->data['showst'] = $this->Stock->search_by_id($id);
        $this->load->view('stock', $this->data);

    }




    function showedit(){

    $id=$this->input->post('id');
    $this->load->model('Stock');

    $this->data['edit'] = $this->Stock->editstock($id);


    foreach ($this->data['edit'] as $e){
        echo "<form class=\"form-material material-primary\" method=\"post\" action=\"http://localhost/royal_gams/Stockc/edit/$e->id\">
                                    <div class=\"form-group row \">
                                        <label  class=\"col-md-3 col-form-label\"  >Product ID</label>
                                        <div class=\"col-md-7\">
                                            <input type=\"text\" class=\"form-control\"  placeholder=\"Product ID\" name=\"p_id\" id=\"p_id\" value=\" $e->product_id\" >
                                        </div>
                                    </div>
                                    <div class=\"form-group row \">
                                        <label  class=\"col-md-3 col-form-label\"  >Type</label>
                                        <div class=\"col-md-7\">
                                            <input type=\"text\" class=\"form-control\"  placeholder=\"Type\" name=\"type\" value=\" $e->type\" >
                                        </div>
                                    </div>
                                    <div class=\"form-group row \">
                                        <label  class=\"col-md-3 col-form-label\"  >Weight</label>
                                        <div class=\"col-md-7\">
                                            <input type=\"text\" class=\"form-control\"  placeholder=\"Weight\" name=\"weight\" id=\"p_id\" value=\" $e->weight\">
                                        </div>
                                    </div>
                                    <div class=\"form-group row \">
                                        <label  class=\"col-md-3 col-form-label\"  >Price</label>
                                        <div class=\"col-md-7\">
                                            <input type=\"text\" class=\"form-control\"  placeholder=\"Price\" name=\"price\" value=\"  $e->price\" >
                                        </div>
                                    </div>
                                    <div class=\"form-group row \">
                                        <label  class=\"col-md-3 col-form-label\"  >In Stock</label>
                                        <div class=\"col-md-7\">
                                            <input type=\"text\" class=\"form-control\"  placeholder=\"In Stock\" name=\"amount\" value=\" $e->amount\" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class=\"form-group row\">
                                        <div class=\"col-md-2\"></div>
                                        <div class=\" col-md-10\">
                                            <button type=\"submit\" class=\"btn btn-primary\"  name=\"stockedit\">Submit</button>

                                        </div>
                                    </div>
                                </form>";

    }

}



}
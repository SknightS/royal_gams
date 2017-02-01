<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Salaryc extends CI_Controller{


    public function index()
    {


        if(isset($_POST['salsubmit'])){
            $this->load->model('Salary');
            $this->Salary->insertsalary();

            $this->load->model('Salary');
            $this->data['showsl'] = $this->Salary->showsalary();
            $this->load->view('salary', $this->data);


        }else{
            $this->load->model('Salary');
            $this->data['showsl'] = $this->Salary->showsalary();
            $this->load->view('salary', $this->data);


        }

    }


    public function delete($id)
    {
        $this->load->model('Salary');
        $this->Salary->delete($id);
        redirect(Salaryc);
    }
}
?>
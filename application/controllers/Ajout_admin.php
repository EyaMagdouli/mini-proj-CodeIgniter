<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Ajout_admin extends CI_Controller{
    public function index(){
        $this->load->view('ajout_admin_add');
    }
    public function add_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','name','trim|is_unique[article.name]');
        $this->form_validation->set_rules('text','text','required|trim');
        $this->form_validation->set_rules('price','price','required|trim');
        $this->form_validation->set_message('is_unique','article already exists');
        if($this->form_validation->run()){
            
            echo 'article successfully added';
        }
        else {
            $this->load->view('ajout_admin_add');
        }
    }
    function savingdataadmin(){
        //this array is used to get fetch data from the view page 
        $data=array(
            'pic'=>$this->input->post('pic'),
            'name'=>$this->input->post('name'),
            'text'=>$this->input->post('text'),
            'price'=>$this->input->post('price')
        );
        //insert into the database
        $this->db->insert('article',$data);
        redirect('Ajout_admin/index');
    }
}
?>
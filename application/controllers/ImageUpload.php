<?php
class ImageUpload extends CI_Controller {
    public function __contrust(){
        parent::__contrust();
        $this->load->helper('url');
    }
    public function index(){
        $this->load->view('ajout_admin_add');
    }
    public function uploadImage(){
        $data=[];
        $countcount=count($_FILES['files']['name']);
        for($i=0;$i<$count;$i++){
            if(!empty($_FILES['files']['names'][$i])){
                $_FILES['file']['name']=$_FILES['files']['name'][$i];
                $_FILES['file']['type']=$_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name']=$_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']=$_FILES['files']['error'][$i];
                $_FILES['file']['size']=$_FILES['files']['size'][$i];
                $config['upload_path']='upload/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';  
                $config['max_size'] = '5000';  
                $config['file_name'] = $_FILES['files']['name'][$i];  
                $this->load->library('upload',$config);
                if($this->upload->do_upload('file')){
                    $uploadData=$this->upload->data();
                    $filename=$uploadData['file_name'];
                    $data['totalFiles'][]=$filename;
                }
            }
        }
        $this->load->view('ajout_admin_add',$data);
    }
}
?>
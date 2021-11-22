<?php
class User extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	}

	public function index()
	{
		
		if($this->input->post('register'))
		{
		$n=$this->input->post('username');
		$p=$this->input->post('password');		
		$que=$this->db->query("select * from signup where email='".$e."'");
		$row = $que->num_rows();
		if($row)
		{
		$data['error']="<h3 style='color:red'>This user already exists</h3>";
		}
		else
		{
		$que=$this->db->query("insert into signup values('','$n','$e','$p')");
		
		$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
		}			
				
		}
	$this->load->view('registration',@$data);	
	}
}
?>
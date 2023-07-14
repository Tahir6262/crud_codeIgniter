<?php
class User extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('user_model');
    }


    function add(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $address = $this->input->post('address');
            $data = array(
                'username'=>$username,
                'email'=>$email,
                'mobile'=>$mobile,
                'address'=>$address
            );
            $status=$this->user_model->insertUser($data);
            if($status==true){
                $this->session->set_flashdata('success','successfuly Added');
                redirect(base_url('user/add'));
               
            }
            else{
                $this->session->set_flashdata('error','Not Added');
                $this->load->view("user/add_user");
            }

        }
        else{
            $this->load->view("user/add_user");    
        } 
    }
    function index(){

        $data['users'] = $this->user_model->getUsers();
        $this->load->view("user/index",$data);  
    }
    
    function edit($id)
    {
        $data['user'] = $this->user_model->getUser($id);
        $data['id'] = $id;
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $mobile = $this->input->post('mobile');
            $address = $this->input->post('address');
            
            $updateData = array(
                'username' => $username,
                'email' => $email,
                'mobile' => $mobile,
                'address' => $address
            );
            
            $status = $this->user_model->updateUser($updateData, $id);
            
            if ($status == true) {
                $this->session->set_flashdata('success', 'Successfully updated');
                redirect(base_url('user/edit/' . $id));
            } else {
                $this->session->set_flashdata('error', 'Update failed');
                $this->load->view("user/edit_user");
            }
        }
        
        $this->load->view("user/edit_user", $data);
    }
    
}

?>
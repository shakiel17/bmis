<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit','2048M');
date_default_timezone_set('Asia/Manila');
    class Pages extends CI_Controller{
        public function index(){
            $page = "index";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                        
            $this->load->view('pages/'.$page);                        
        }        
        
        public function login(){
            $type=$this->input->post('options');
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $user=$this->Barangay_model->authenticate($type,$username,$password);
            if($user){
                $user_data = array(
                    'username' => $user['username'],
                    'fullname' => $user['fullname'],
                    'user_type' => $type,
                    'user_login' => true
                );
                $this->session->set_userdata($user_data);
                redirect(base_url()."main");
            }else{
                $this->session->set_flashdata('error','Invalid username or password!');
                redirect(base_url());
            }
        }
        public function logout(){
            $this->session->sess_destroy();
            redirect(base_url());
        }
        public function main(){
            $page="main";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }else{
                if($this->session->user_login){
                    $this->load->view('includes/header');
                    $this->load->view('includes/navbar');
                    $this->load->view('pages/'.$page);
                    $this->load->view('includes/modal');
                    $this->load->view('includes/footer');
                }else{
                    redirect(base_url());
                }
            }
        }
}
?>

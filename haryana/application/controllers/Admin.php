<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){

        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index()
	{ 
        if($this->session->userdata('user')){
        $select['key'] = $this->db->query("SELECT * FROM `admin`")->result_array();
        $select['total_category'] = $this->db->query("SELECT COUNT(*) FROM category;")->result_array();
        $select['total_news'] = $this->db->query("SELECT COUNT(*) FROM sub_category;")->result_array();
        $select['total_videos'] = $this->db->query("SELECT COUNT(*) FROM videos;")->result_array();

		$this->load->view('admin/include/header.php', $select);
        $this->load->view('admin/index.php');
        $this->load->view('admin/include/footer.php');
        }else{
            redirect(base_url()."admin/login_page");
        }
	}

    public function admin_profile()
    {   
        $select['key'] = $this->db->get_where('admin')->result_array();

        $this->load->view('admin/include/header.php', $select);
        $this->load->view('admin/admin_profile/profile.php');
        $this->load->view('admin/include/footer.php');

        if($this->input->post()){
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['mobile'] = $this->input->post('mobile');
            $data['address'] = $this->input->post('address');
            $data['education'] = $this->input->post('education');
            $data['profession'] = $this->input->post('profession');
            $data['experience'] = $this->input->post('experience');
            $data['skills'] = $this->input->post('skills');
            $data['panel_name'] = $this->input->post('panel_name');

            if(!empty($_FILES['admin_img']['name'])){
                $image = $_FILES['admin_img']['name'];
                $tmp_img = $_FILES['admin_img']['tmp_name'];
                $path = "././upload/admin/".$image;
                move_uploaded_file($tmp_img, $path);
                $data['admin_image'] = $image;
            }

            if(!empty($_FILES['panel_img']['name'])){
                $image = $_FILES['panel_img']['name'];
                $tmp_img = $_FILES['panel_img']['tmp_name'];
                $path = "././upload/admin/".$image;
                move_uploaded_file($tmp_img, $path);
                $data['panel_logo'] = $image;
            }

            $update = $this->db->update('admin',$data);

            if($update){
                header("Refresh:0");
            }

        }else{
            // $this->load->view('admin/include/header');
            // $this->load->view('admin/admin_page/profile');
            // $this->load->view('admin/include/footer');
        }
    }


    public function login_page()
    {
        $this->load->view('admin/admin_profile/login');
    }

    public function login(){
        if($this->input->post()){
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('admin/admin_profile/login');
            }
            else
            {
                $email = $this->input->post('email', true);
                $password = $this->input->post('password', true);
                
                $user = $this->admin_model->login($email, $password);
                if(!empty($user))
                {
                    $this->session->set_userdata('user', $user); 
                    redirect(base_url().'admin'); 
                }
                else
                {
                    $this->session->set_flashdata('message', 'Invalid Username and Password!');
                    redirect(base_url()."admin/login_page");
                }
            }
        }
    }    
   

    public function logout(){

        $this->session->unset_userdata('user');
        session_destroy();
        redirect(base_url()."admin/login_page");
    } 

    // public function change_password(){
        
	
    //    $this->load->view('admin/include/header.php', $select);
    //     $this->load->view('admin/admin_profile/change_password.php');
    //     $this->load->view('admin/include/footer.php');

    // }




}

?>

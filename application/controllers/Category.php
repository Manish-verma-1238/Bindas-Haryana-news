<?Php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function add_category(){
        
        $select['key'] = $this->db->get('admin')->result_array();

        $this->load->view('admin/include/header', $select);
        $this->load->view('category/add');
        $this->load->view('admin/include/footer');

        if($this->input->post()){
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');

            if(!empty($_FILES['image']['name'])){
                $image = $_FILES['image']['name'];
                $tmp_img = $_FILES['image']['tmp_name'];
                $path = "././upload/category/".$image;
                move_uploaded_file($tmp_img, $path);
                $data['image'] = $image;
            }

            $insert = $this->db->insert('category',$data);

            if($insert){
                redirect(base_url('view_category'));
            }else{
                
            }

        }else{
            // $this->load->view('admin/include/header');
            // $this->load->view('admin/admin_page/profile');
            // $this->load->view('admin/include/footer');
        }
    }

    public function view_category(){
        $select['key'] = $this->db->get('admin')->result_array();
        $select['catdata'] = $this->db->query('SELECT * FROM `category` order by id desc')->result_array();

        $this->load->view('admin/include/header',$select);
        $this->load->view('category/view');
        $this->load->view('admin/include/footer');
    }

    public function edit(){

        $id = $this->uri->segment(3);
        $select['key'] = $this->db->get('admin')->result_array();
        $select['catdata'] = $this->db->get_where('category', array('id' => $id ))->result_array();

        $this->load->view('admin/include/header', $select);
        $this->load->view('category/edit');
        $this->load->view('admin/include/footer');

        if($this->input->post()){
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');

            if(!empty($_FILES['image']['name'])){
                $image = $_FILES['image']['name'];
                $tmp_img = $_FILES['image']['tmp_name'];
                $path = "././upload/category/".$image;
                move_uploaded_file($tmp_img, $path);
                $data['image'] = $image;
            }

            $update = $this->db->update('category',$data, array('id' => $id ));
            
            if($update){
                redirect(base_url('view_category'));
            }else{
                
            }

        }else{
            // $this->load->view('admin/include/header');
            // $this->load->view('admin/admin_page/profile');
            // $this->load->view('admin/include/footer');
        }

    }

    public function delete(){

        $id = $this->uri->segment(3);
        $delete = $this->db->delete('category', array('id' => $id ));

        if($delete){
            redirect(base_url('view_category'));
        }else{
            
        }
    }
}
?>
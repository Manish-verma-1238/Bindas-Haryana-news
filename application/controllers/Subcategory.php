<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategory extends CI_Controller 
{
    public function add(){

        $select['key'] = $this->db->get('admin')->result_array();
        $select['category'] = $this->db->get('category')->result_array();

        $this->load->view('admin/include/header', $select);
        $this->load->view('subcategory/add');
        $this->load->view('admin/include/footer');

        if($this->input->post()){
            $data['cat_id'] = $this->input->post('cat_id');
            $data['sub_title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['author'] = $this->input->post('author');

            if(!empty($_FILES['image']['name'])){
                $image = $_FILES['image']['name'];
                $tmp_img = $_FILES['image']['tmp_name'];
                $path = "././upload/sub_category/".$image;
                move_uploaded_file($tmp_img, $path);
                $data['image'] = $image;
            }

            $insert = $this->db->insert('sub_category',$data);

            if($insert){
                redirect(base_url('view_subcategory'));
            }else{
                
            }

        }else{
            // $this->load->view('admin/include/header');
            // $this->load->view('admin/admin_page/profile');
            // $this->load->view('admin/include/footer');
        }
    }

    public function view(){

        $select['key'] = $this->db->get('admin')->result_array();
        // $select['view'] = $this->db->query('SELECT * FROM `sub_category` order by id desc')->result_array();
        $select['category'] = $this->db->query('select category.id as catid, category.title, sub_category.* from category join sub_category on category.id = sub_category.cat_id order by sub_category.id desc' )->result_array();

        $this->load->view('admin/include/header', $select);
        $this->load->view('subcategory/view');
        $this->load->view('admin/include/footer');

    }

    public function edit(){

        $id = $this->uri->segment(3);
        $select['key'] = $this->db->get('admin')->result_array();
        // $select['details'] = $this->db->query('select category.id as catid, category.title, sub_category.* from category join sub_category on category.id = sub_category.cat_id', array('id' => $id))->result_array();
        // $select['category'] = $this->db->get_where('sub_category', array('id' => $id))->result_array();
        $select['category'] = $this->db->query('select category.id as catid, category.title, sub_category.* from category join sub_category on category.id = sub_category.cat_id', array('id' => $id))->result_array();
        $select['details'] = $this->db->get_where('sub_category', array('id' => $id ))->result_array();

        $this->load->view('admin/include/header', $select);
        $this->load->view('subcategory/edit');
        $this->load->view('admin/include/footer');

        if($this->input->post()){
            $data['cat_id'] = $this->input->post('cat_id');
            $data['sub_title'] = $this->input->post('title');
            $data['description'] = $this->input->post('description');
            $data['author'] = $this->input->post('author');

            if(!empty($_FILES['image']['name'])){
                $image = $_FILES['image']['name'];
                $tmp_img = $_FILES['image']['tmp_name'];
                $path = "././upload/sub_category/".$image;
                move_uploaded_file($tmp_img, $path);
                $data['image'] = $image;
            }

            $update = $this->db->update('sub_category', $data, array('id' => $id) );

            if($update){
                redirect(base_url('view_subcategory'));
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
        $delete = $this->db->delete('sub_category', array('id' => $id ));

        if($delete){
            redirect(base_url('view_subcategory'));
        }else{
            
        }
    }

}

?>
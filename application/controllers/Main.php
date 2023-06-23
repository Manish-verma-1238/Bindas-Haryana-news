<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index(){

        // $latest['news'] =  $this->db->select()->order_by('id', "desc")->limit(1)->get('sub_category')->row_array();
        
        $select['menu'] = $this->db->query('select * from category limit 3' )->result_array();
        $select['menu1'] = $this->db->query('select * from category order by rand() limit 6' )->result_array();
        $select['menus'] = $this->db->query('select * from category limit 3,20' )->result_array();

        $select['category'] = $this->db->query('select * from sub_category order by id desc limit 5, 10' )->result_array();
        $select['category1'] = $this->db->query('select * from sub_category order by id desc limit 1' )->result_array();
        $select['category2'] = $this->db->query('select * from sub_category order by id desc limit 10,20' )->result_array();
        $select['category4'] = $this->db->query('select * from sub_category order by id desc limit 1,5' )->result_array();

        $manish = $this->db->query('select id from category')->result_array();
        $a = $manish['0']['id'];
        $b = $manish['3']['id'];
        $c = $manish['1']['id'];
        $d = $manish['2']['id'];
        $e = $manish['4']['id'];
        
        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->order_by("sub_category.id", "desc");
        $this->db->limit(8);
        $this->db->where('sub_category.cat_id', $a); 
        $select['india'] = $this->db->get()->result_array();

        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id');
        $this->db->order_by("sub_category.id", "desc"); 
        $this->db->limit(6);
        $this->db->where('sub_category.cat_id', $b); 
        $select['bollywood'] = $this->db->get()->result_array();

        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->order_by("sub_category.id", "desc");
        $this->db->limit(2);
        $this->db->where('sub_category.cat_id', $c); 
        $select['world'] = $this->db->get()->result_array();

        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->order_by("sub_category.id", "desc");
        $this->db->limit(9,2);
        $this->db->where('sub_category.cat_id', $c); 
        $select['world1'] = $this->db->get()->result_array();

        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->order_by("sub_category.id", "desc");
        $this->db->limit(3);
        $this->db->where('sub_category.cat_id', $d); 
        $select['editor'] = $this->db->get()->result_array();

        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->order_by("sub_category.id", "desc");
        $this->db->limit(5,2);
        $this->db->where('sub_category.cat_id', $d); 
        $select['editor1'] = $this->db->get()->result_array();

        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->order_by("sub_category.id", "desc");
        $this->db->limit(5,7);
        $this->db->where('sub_category.cat_id', $d); 
        $select['editor2'] = $this->db->get()->result_array();

        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->order_by("sub_category.id", "desc");
        $this->db->limit(3);
        $this->db->where('sub_category.cat_id', $e); 
        $select['sports'] = $this->db->get()->result_array();

        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->order_by("sub_category.id", "desc");
        $this->db->limit(5,2);
        $this->db->where('sub_category.cat_id', $e); 
        $select['sports1'] = $this->db->get()->result_array();

        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->order_by("sub_category.id", "desc");
        $this->db->limit(5,7);
        $this->db->where('sub_category.cat_id', $e); 
        $select['sports2'] = $this->db->get()->result_array();

        // $select['india'] = $this->db->query('SELECT * FROM `sub_category` WHERE cat_id = '$a' ORDER by id desc limit 8;' )->result_array();
        // $select['bollywood'] = $this->db->query('SELECT * FROM `sub_category` WHERE cat_id = 8 ORDER by id desc limit 6; ' )->result_array();
        // $select['world'] = $this->db->query('SELECT * FROM `sub_category` WHERE cat_id = 8 ORDER by id desc limit 2; ' )->result_array();
        // $select['world1'] = $this->db->query('SELECT * FROM `sub_category` WHERE cat_id = 8 ORDER by id desc limit 2,9; ' )->result_array();
        // $select['editor'] = $this->db->query('SELECT * FROM `sub_category` WHERE cat_id = 8 ORDER by id desc limit 3; ' )->result_array();
        // $select['editor1'] = $this->db->query('SELECT * FROM `sub_category` WHERE cat_id = 8 ORDER by id desc limit 2,5; ' )->result_array();
        // $select['editor2'] = $this->db->query('SELECT * FROM `sub_category` WHERE cat_id = 8 ORDER by id desc limit 7,5; ' )->result_array();
        // $select['sports'] = $this->db->query('SELECT * FROM `sub_category` WHERE cat_id = 8 ORDER by id desc limit 2; ' )->result_array();
        // $select['sports1'] = $this->db->query('SELECT * FROM `sub_category` WHERE cat_id = 8 ORDER by id desc limit 2,3; ' )->result_array();
        // $select['sports2'] = $this->db->query('SELECT * FROM `sub_category` WHERE cat_id = 8 ORDER by id desc limit 5,3; ' )->result_array();
        $select['random'] = $this->db->query('select * from sub_category order by rand()' )->result_array();
        $select['videos']= $this->db->query('select * from videos order by id desc limit 4' )->result_array();


        // $select['category'] = $this->db->query('select * from sub_category order by id desc limit 1,9' )->result_array();
        
        // $select['category1'] = $this->db->query('select * from sub_category order by id desc limit 1,6' )->result_array();
        // $select['category2'] = $this->db->query('select * from sub_category order by id desc limit 1,7' )->result_array();
        // $select['category3'] = $this->db->query('select * from sub_category order by id desc limit 1,8' )->result_array();
        // $select['category5'] = $this->db->query('select * from sub_category order by id desc limit 1,5' )->result_array();

        $this->load->view('frontend/includes/header.php', $select);
        $this->load->view('frontend/index.php');
        $this->load->view('frontend/includes/footer.php');
    }

    public function detailed(){

        $id = $this->uri->segment(3);
        // $select['details'] = $this->db->get_where('sub_category', array('id' => $id ))->result_array();
        $select['menu'] = $this->db->query('select * from category limit 3' )->result_array();
        $select['menu1'] = $this->db->query('select * from category order by rand() limit 6' )->result_array();
        $select['menus'] = $this->db->query('select * from category limit 3,20' )->result_array();
        $select['random'] = $this->db->query('select * from sub_category order by rand()' )->result_array();

        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->where('sub_category.id', $id); 
        $select['details'] = $this->db->get()->result_array();

        $select['category1'] = $this->db->query('select * from sub_category order by rand() limit 3,12' )->result_array();
        $select['category4'] = $this->db->query('select * from sub_category order by rand() limit 2' )->result_array();
               
        
        $this->load->view('frontend/includes/header.php', $select);
        $this->load->view('frontend/detailednews.php');
        $this->load->view('frontend/includes/footer.php');
    
    }

    public function view(){

        $id = $this->uri->segment(3);
        
        $select['menu'] = $this->db->query('select * from category limit 3' )->result_array();
        $select['menu1'] = $this->db->query('select * from category order by rand() limit 6' )->result_array();
        $select['menus'] = $this->db->query('select * from category limit 3,20' )->result_array();
        $select['random'] = $this->db->query('select * from sub_category order by rand()' )->result_array();
        
        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->limit(12);
        $this->db->where('category.id', $id); 
        $select['details'] = $this->db->get()->result_array(); 

        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->limit(2,14);
        $this->db->where('category.id', $id); 
        $select['editor'] = $this->db->get()->result_array(); 

        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->limit(3,18);
        $this->db->where('category.id', $id); 
        $select['editor1'] = $this->db->get()->result_array(); 

        $this->db->select('category.id as category_id, category.title ,sub_category.*');
        $this->db->from('sub_category');
        $this->db->join('category', 'category.id = sub_category.cat_id'); 
        $this->db->limit(3,22);
        $this->db->where('category.id', $id); 
        $select['editor2'] = $this->db->get()->result_array(); 
        
       
        
        $this->load->view('frontend/includes/header.php', $select);
        $this->load->view('frontend/view.php');
        $this->load->view('frontend/includes/footer.php');
    
    }

}

?>
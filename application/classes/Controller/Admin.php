<?php defined('SYSPATH') or die('No direct script access.');

class Controller_admin extends Controller {
    public function before(){
        $session = Session::instance();
//        print_r($_SESSION);
        if(!isset($_SESSION['logged_in']) or !isset($_SESSION['username']) or $_SESSION['logged_in']!=true ){
            HTTP::redirect('welcome/login');
            echo 'redirect unsuccessful';
        }
    }
    
    public function action_index(){
        
//        print_r($_POST);        
        if(!empty($_POST)){
            $children =Model::factory('children');
//            print_r($_POST);
            switch($_POST['place']){
            case 'taluka': $details = $children->get_children_taluka(); break;
            case 'district': $details = $children->get_children_district(); break;
            case 'state': $details = $children->get_children_state(); break;
            }
//            print_r($details);
            $view = View::factory('admin/searchchildren')->bind('details',$details);
            $this->response->body($view);

        }else{
            $view = View::factory('admin/searchchildren');
            $this->response->body($view);
        }
    }
    
    public function action_addvolunteer(){
        if(!empty($_POST)){
            $volunteer = Model::factory('volunteer');
            $final=$volunteer->validate_volunteer(arr::extract($_POST,array('name','volunteer_place','contact')));
            if($volunteer->add_volunteer($final)){
                die('success');//success
            }else{
                die('failure');//failure
            }
        }else{
            $view = View::factory('admin/addvolunteer');
            $this->response->body($view);   
        }
    }
    
    public function action_addadmin(){
        if(!empty($_POST)){
            $admin = Model::factory('admin');
            $final=$admin->validate_admin(arr::extract($_POST,array('name','user','password')));
            if($admin->add_admin($final)){
                die('success');//success
            }else{
                die('failure');//failure
            }
        }else{
            $view = View::factory('admin/addadmin');
            $this->response->body($view);   
        }
    }
    
    public function action_addplaces(){
        if(!empty($_POST)){
            
        }else{
            $view = View::factory('admin/addplaces');
            $this->response->body($view);   
        }
    }

}
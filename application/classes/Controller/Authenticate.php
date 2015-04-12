<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Authenticate extends Controller {

	public function action_login()
	{
        session_start();
        session_unset();
        session_destroy();
        
//        print_r($session->as_array());
        $admin = Model::factory('admin');
        if (!empty($_POST)) {
            $session = Session::instance();
            $final = $admin->validate_admin(arr::extract($_POST,array('username','password')));
            $details = $admin->get_admin_details($final['username']);
//            print_r($details);
            if(!empty($details) and $details['password']===$final['password']){
                $session->set('logged_in', true);
                $session->set('username', $final['username']);
//                session_start();
                $_SESSION =& $session->as_array();
                HTTP::redirect('admin/');    

            }
            else echo 'invalid username or password';
        
        }
    }
    
    public function action_logout()
	{
        $session = Session::instance();
        $session->delete('logged_in');
        $session->delete('username');
        session_unset();
        session_destroy();
        HTTP::redirect('/'); 
	}
    
    

}
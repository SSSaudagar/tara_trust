<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Authenticate extends Controller {

	public function action_login()
	{
        $session = Session::instance();
        print_r($session->as_array());
        $admin = Model::factory('admin');
        if (!empty($_POST)) {
            $final = $admin->validate_admin(arr::extract($_POST,array('username','password')));
            $details = $admin->get_admin_details($final['username']);
            if(!empty($details) and $details['password']===$final['password']){
                $session->set('logged_in', true);
                $session->set('username', $final['username']);
                
            }
            else echo 'failure';
        }
    }
    
    public function action_logout()
	{
        
	}
    
    

}
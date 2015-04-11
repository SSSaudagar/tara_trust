<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Admin extends Model
{
//    CREATE TABLE IF NOT EXISTS `admin` (
//      `username` varchar(20) NOT NULL,
//      `name` varchar(40) NOT NULL,
//      `password` text NOT NULL
//    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;   
    
    public function get_admin_details($user){
        $query = DB::query(Database::SELECT, 'SELECT * FROM admin WHERE username = :user');
        $query->bind(':user',$user);
        $result = $query->execute();
        return $result->as_array();
    }
    
    public function add_admin($d){
         return DB::insert('admin', array('username','name','pssword'))
            ->values(array($d['username'],$d['name'],$d['password']))
            ->execute();
    }
    
     public function validate_admin($arr) {
        foreach($arr as $value){
             $value = trim($value);
            $value = strip_tags($value);
            $value = HTML::chars($value);
            if(empty($value)) return FALSE;
        }
         return $arr;
    }
}
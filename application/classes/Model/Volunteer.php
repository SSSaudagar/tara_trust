<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Volunteer extends Model
{
    
//CREATE TABLE IF NOT EXISTS `volunteer` (
//`volunteer_id` int(11) NOT NULL,
//  `name` varchar(30) NOT NULL,
//  `place` int(11) NOT NULL,
//  `contact` bigint(20) NOT NULL
//) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
    
        
    public function add_volunteer($d){
         return DB::insert('volunteer', array('name','place','contact'))
            ->values(array($d['name'],$d['volunteer_place'],$d['contact']))
            ->execute();
    }
    
    public function by_place($place){
        $query = DB::query(Database::SELECT, 'SELECT * FROM volunteer where place = :place');
        $query->bind(':place',$place);
        $result = $query->execute();
        return $result->as_array();

    }
    
    public function in_place($place){
        $query = DB::query(Database::SELECT, 'SELECT count(*) as count FROM volunteer where place = :place');
        $query->bind(':place',$place);
        $result = $query->execute();
        $array= $result->as_array();
        return $array['count'];

    }
    
     public function validate_volunteer($arr) {
        foreach($arr as $value){
             $value = trim($value);
            $value = strip_tags($value);
            $value = HTML::chars($value);
            if(empty($value)) return FALSE;
        }
         return $arr;
    }
}
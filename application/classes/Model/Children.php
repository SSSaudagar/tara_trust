<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Children extends Model
{
//    CREATE TABLE IF NOT EXISTS `children` (
//`child_id` int(11) NOT NULL,
//  `name` varchar(50) NOT NULL,
//  `age` int(11) NOT NULL,
//  `place` int(11) NOT NULL,
//  `work` text NOT NULL
//) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Street children' AUTO_INCREMENT=1 ;
    
     public function get_children_taluka(){
        $query = DB::query(Database::SELECT, 'SELECT * FROM children  join places on children.place = place_id order by taluka');
//        $query->bind(':taluka',$taluka);
        $result = $query->execute();
        return $result->as_array();
    }
     public function get_children_district(){
        $query = DB::query(Database::SELECT, 'SELECT * FROM children  join places on children.place = place_id order by district');
//        $query->bind(':taluka',$taluka);
        $result = $query->execute();
        return $result->as_array();
    }
     public function get_children_state(){
        $query = DB::query(Database::SELECT, 'SELECT * FROM children  join places on children.place = place_id order by state');
//        $query->bind(':taluka',$taluka);
        $result = $query->execute();
        return $result->as_array();
    }
}
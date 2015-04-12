<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Children extends Model
{
//    
//    DROP TABLE IF EXISTS `children`;
//CREATE TABLE IF NOT EXISTS `children` (
//`child_id` int(11) NOT NULL,
//  `name` varchar(50) NOT NULL,
//  `age` int(11) NOT NULL,
//  `place` int(11) NOT NULL,
//  `description` text NOT NULL,
//  `assigned_to` int(11) DEFAULT NULL
//) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Street children' AUTO_INCREMENT=2 ;
    
    
     public function get_children_taluka(){
        $query = DB::query(Database::SELECT, 'SELECT * FROM children  join places on children.place = place_id order by taluka');
        $result = $query->execute();
        return $result->as_array();
    }
     public function get_children_district(){
        $query = DB::query(Database::SELECT, 'SELECT * FROM children  join places on children.place = place_id order by district');
        $result = $query->execute();
        return $result->as_array();
    }
     public function get_children_state(){
        $query = DB::query(Database::SELECT, 'SELECT * FROM children  join places on children.place = place_id order by state');
        $result = $query->execute();
        return $result->as_array();
    }
    public function add_child($name,$age,$place,$desc){
        $query = DB::query(Database::INSERT, "INSERT INTO `tara_trust`.`children` ( `name`, `age`, `place`, `description`) VALUES (:name, :age, :place, :description );");
        $query->bind(':name',$name);
        $query->bind(':age',$age);
        $query->bind(':place',$place);
        $query->bind(':description',$desc);
        return $query->execute();            //confirm how it works
    }
    
    public function assign_child($child,$volunteer){
        $query = DB::query(Database::UPDATE, 'UPDATE  `tara_trust`.`children` set assigned_to = :volunteer where child_id = :child ');
        $query->bind(':child',$child);
        $query->bind(':volunteer',$volunteer);
        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }
    
    public function in_place($place){
        $query = DB::query(Database::SELECT, 'SELECT count(*) as count FROM children where place = :place');
        $query->bind(':place',$place);
        $result = $query->execute();
        $array= $result->as_array();
        return $array['count'];

    }
}
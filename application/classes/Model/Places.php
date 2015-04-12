<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Places extends Model
{
    
//DROP TABLE IF EXISTS `places`;
//CREATE TABLE IF NOT EXISTS `places` (
//`place_id` int(11) NOT NULL,
//  `place` varchar(20) NOT NULL,
//  `taluka` varchar(20) NOT NULL,
//  `district` varchar(20) NOT NULL,
//  `state` varchar(20) NOT NULL
//) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Information about places' AUTO_INCREMENT=1 ;
        
    public function add_places($d){
         return DB::insert('places', array('place','taluka','district','state'))
            ->values(array($d['place'],$d['taluka'],$d['district'],$d['state']))
            ->execute();
    }
    
    public function by_place($place){
        $query = DB::query(Database::SELECT, 'SELECT * FROM place');
        $result = $query->execute();
        return $result->as_array();
    }
    
     public function validate_place($arr) {
        foreach($arr as $value){
             $value = trim($value);
            $value = strip_tags($value);
            $value = HTML::chars($value);
            if(empty($value)) return FALSE;
        }
         return $arr;
    }
}
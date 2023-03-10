<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mjoin extends CI_Model {
 
public function duatable() {
 $this->db->select('clock_out');
 $this->db->from('data_clockout');
 $this->db->join('clockin','clockin.id=dataclockout.id');
 $query = $this->db->get();
 return $query->result();
}

}
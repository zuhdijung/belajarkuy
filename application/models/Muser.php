<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {
	// constrcutor
	function __construct(){
		parent::__construct();
	}
	function fetchSharing($limit,$start,$pagenumber) {
	    if($pagenumber!="")
	      $this->db->limit($limit,($pagenumber*$limit)-$limit);
	    else
	      $this->db->limit($limit,$start);
	  	$this->db->where('id_user',$this->session->userdata('id_user'));
	    $this->db->order_by('date_sharing','DESC');
	    $query = $this->db->get('sharing');
	    if($query->num_rows()>0){
	      return $query->result();
	    }
	    else return FALSE;
	}
	function countParticipant($id_sharing){
		$this->db->where('id_sharing',$id_sharing);
		return $this->db->count_all_results('participant');
	}
}
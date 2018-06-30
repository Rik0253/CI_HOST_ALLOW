<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Demo extends Controller {
	
    function __construct() {
        parent::__construct();
    }

   /**************************************************
                        Example
    **************************************************/


	
	// method with hosts_allowed applied
	function demo_of_allowed_method() {
	
		// load the library 
		$this->load->library('host_allow_lib');
		
		//evaluate the reponse
		if(!$this->host_restriction_lib->validate($this->config->item('host_allow'))) {
		
			echo "Nope....".$this->host_allow_lib->get_error();
			
		} else {
		
			echo "Yes!! You are allowed to have access";
			
		}
		
	}

}
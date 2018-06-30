# CI_HOST_ALLOW
To allow the IP Address which can access the codeigniter pages.


/************************************INSTALLATION*****************************************/
1.Copy the files from CI_HOST_ALLOW/libraries/Host_allow_lib.php => Your_PROJECT/application/libraries
  Copy the file from CI_HOST_ALLOW/config/host_allow.php => Your_PROJECT/application/config

2.Open your autoload.php inside YOUR_PROJECT/application/config/autoload.php
  Find :
        /*
| -------------------------------------------------------------------
|  Auto-load Config files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['config'] = array('config1', 'config2');
|
| NOTE: This item is intended for use ONLY if you have created custom
| config files.  Otherwise, leave it blank.
|
*/
$autoload['config'] = array();
//Replace the line with
$autoload['config'] = array('host_allow');

3.Open Your Controller file where you want to restrict other ip and allow your ip address use the code insde the function

function demo_of_allowed_method() {
	
		// load the library 
		$this->load->library('host_allow_lib');
		
		//evaluate the reponse
		if(!$this->host_allow_lib->validate($this->config->item('host_allow'))) {
		
			echo "Nope....".$this->host_allow_lib->get_error();
			
		} else {
		
			echo "Yes!! You are allowed to have access";
			
		}
		
	}


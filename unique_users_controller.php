<?php 

/**
 * user_sessions module class
 *
 * @package munkireport
 * @author eholtam
 **/
class Unique_users_controller extends Module_controller
{
	
	/*** Protect methods with auth! ****/
	function __construct()
	{
		// Store module path
		$this->module_path = dirname(__FILE__);
	}

	/**
	 * Default method
	 * @author eholtam
	 *
	 **/
	function index()
	{
		echo "You've loaded the unique_users module!";
	}
    
	/**
     * Retrieve data in json format
     *
     **/
     public function get_data($serial_number = '')
     {
        $obj = new View();

        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }

        $queryobj = new Unique_users_model;
        $unique_users_tab = array();
        foreach($queryobj->retrieve_records($serial_number) as $shareEntry) {
            $unique_users_tab[] = $shareEntry->rs;
        }

        $obj->view('json', array('msg' => $unique_users_tab));
     }
		
} // END class User_sessionss_controller

<?php
	require_once("application/libraries/REST_Controller.php");

	class Ajax extends REST_Controller
	{
	    public function index_get()
	    {
	        if( !empty($this->input->get('job_name')) ){
				$data['allJobs'] = $this->jobs->jobs_by_name($this->input->get('job_name'));
	        }
	    }

	}

?>
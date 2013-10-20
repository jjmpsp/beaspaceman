<?php
	require_once("application/libraries/REST_Controller.php");

	class Ajax extends REST_Controller
	{
		public function index_get()
	    {
	    	echo "Sup?";
	    }

	    public function jobs_search_get()
	    {
	        if( $this->input->get('job_name') !== "" ){
	        	$this->load->model("jobs");
				$this->response($this->jobs->jobs_by_name($this->input->get('job_name')));
	        }
	    }

	    public function random_job_get()
	    {
	        $this->load->model("jobs");
			$this->response($this->jobs->random_job());
	    }

	}

?>
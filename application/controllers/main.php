<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper("url");
		$this->load->model("video");
		$data["featuredVideos"] = $this->video->get_featured();

		$this->load->view('index', $data);
	}

	public function feedback()
	{
		$this->load->helper("url");
		$this->load->view('survey');
	}

	public function about()
	{
		$this->load->helper("url");
		$this->load->view('about');
	}


	public function video()
	{
		$this->load->helper("url");
		$this->load->model("video");

		$term = $this->input->get('url');
		$data['videoInfo'] = $this->video->get_video_details($term);

		//$this->load->view('job_search', $data);		
	}
	
	public function view_video(){
		$this->load->helper('url');
		$this->load->view('view_video');


	}

	public function test(){

		/* Scraper code */
		/*
		$this->load->model("jobs");
		$data = json_decode( file_get_contents('All jobs.json') );

		for($i=0;$i<count($data->data);$i++){
			$this->jobs->add_job(array('name' => $data->data[$i]->name[0]));
		}
		*/
		echo "test";
	}

	public function job_search()
	{
		$this->load->helper("url");
		$this->load->model("jobs");

		$term = $this->input->get('job_name');
		$data['allJobs'] = $this->jobs->jobs_by_name($term);

		$this->load->view('job_search', $data);		
	}

	public function inspiration()
	{
		$this->load->helper("url");
		$this->load->model("jobs");

		$term = $this->input->get('job_name');
		$data['allJobs'] = $this->jobs->jobs_by_name($term);

		$this->load->view('inspiration', $data);		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

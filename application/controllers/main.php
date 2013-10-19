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
		$this->load->view('index');
	}

	public function feedback()
	{
		$this->load->helper("url");
		$this->load->view('survey');
	}

	public function job_search()
	{
		$this->load->helper("url");
		$this->load->model("jobs");

		$term = $this->input->get('job_name');
		$data['allJobs'] = $this->jobs->get_last_ten_entries();

		$this->load->view('job_search');		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

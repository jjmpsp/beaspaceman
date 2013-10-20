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

	public function autocomplete(){

		echo'
		<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Autocomplete - Remote JSONP datasource</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <style>
  .ui-autocomplete-loading {
    background: white url("images/ui-anim_basic_16x16.gif") right center no-repeat;
  }
  #city { width: 25em; }
  </style>
  <script>
  $(function() {
    function log( message ) {
      $( "<div>" ).text( message ).prependTo( "#log" );
      $( "#log" ).scrollTop( 0 );
    }
 
    $( "#city" ).autocomplete({
      source: function( request, response ) {
        $.ajax({
          url: "http://ws.geonames.org/searchJSON",
          dataType: "jsonp",
          data: {
            featureClass: "P",
            style: "full",
            maxRows: 12,
            name_startsWith: request.term
          },
          success: function( data ) {
            response( $.map( data.geonames, function( item ) {
              return {
                label: item.name + (item.adminName1 ? ", " + item.adminName1 : "") + ", " + item.countryName,
                value: item.name
              }
            }));
          }
        });
      },
      minLength: 2,
      select: function( event, ui ) {
        log( ui.item ?
          "Selected: " + ui.item.label :
          "Nothing selected, input was " + this.value);
      },
      open: function() {
        $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
      },
      close: function() {
        $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
      }
    });
  });
  </script>
</head>
<body>
 
<div class="ui-widget">
  <label for="city">Your city: </label>
  <input id="city" />
  Powered by <a href="http://geonames.org">geonames.org</a>
</div>
 
<div class="ui-widget" style="margin-top: 2em; font-family: Arial;">
  Result:
  <div id="log" style="height: 200px; width: 300px; overflow: auto;" class="ui-widget-content"></div>
</div>
 
 
</body>
</html>
';
	}

	public function job_search()
	{
		$this->load->helper("url");
		$this->load->model("jobs");

		$term = $this->input->get('job_name');
		$data['allJobs'] = $this->jobs->jobs_by_name($term);

		$this->load->view('job_search', $data);		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

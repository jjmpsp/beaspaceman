<?php
    class Video extends CI_Model {

        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
        }
	        

		function get_video_details($url)
		{
			$this->load->helper('vimeo');

		    // returns FALSE if invalid URL || non-existant Vimeo Video URL
		    $vimeo_video_id = vimeo_id( $url );

		    // returns FALSE if no API data available for video
		    $vimeo_video_data = vimeo_data( $vimeo_video_id );
		    //print_r( $vimeo_video_data );

		    $dbdata = array(
			   'vimeo_url' 		=>  $vimeo_video_data[0]["id"],
			   'description' 	=> 	$vimeo_video_data[0]["description"],
			   'date' 			=>	$vimeo_video_data[0]["upload_date"],
			   'thumbnail'		=>	$vimeo_video_data[0]["thumbnail_large"],
			   'duration'		=>	$vimeo_video_data[0]["duration"],
			   'tags'			=>	$vimeo_video_data[0]["tags"]
			);

			$this->add_video($dbdata);

		}

		function single_video_details($job_id){
			$this->db->where('featured', '1');
		}

		function add_video($dbdata){
			$this->db->insert('video', $dbdata); 
		}

		function get_featured(){
			$this->db->where('featured', '1');
			$this->db->order_by('id','desc');
            $query = $this->db->get('video', 9);
            return $query->result();
		}
	}
?>
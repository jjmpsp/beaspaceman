<?php
    class Jobs extends CI_Model {

        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
        }
        
        function add_job($dbdata)
        {
            $query = $this->db->insert('job', $dbdata);
        }

        function get_last_ten_entries()
        {
            $query = $this->db->get('job', 10);
            return $query->result();
        }

        function jobs_by_name($name)
        {
            $this->db->like('name', $name);
            $this->db->order_by('name','asc');
            $query = $this->db->get('job');
            return $query->result();
        }

        function random_job()
        {
            $this->db->order_by('job_id', 'RANDOM');
            $this->db->limit(1);
            $query = $this->db->get('job_video');
            return $query->row_array(); 
        }

        function job_details($job_id)
        {
            $this->db->where('job_id', $job_id);
            $this->db->join('video', 'video.id = job_video.video_id');
            $this->db->join('job', 'job.id = job_video.job_id');
            $query = $this->db->get('job_video');
            return $query->row_array(); 
        }

    }
?>
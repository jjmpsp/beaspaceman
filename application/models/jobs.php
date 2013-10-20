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
    }
?>
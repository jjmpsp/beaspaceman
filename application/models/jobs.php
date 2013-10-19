<?php
    class Jobs extends CI_Model {

        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
        }
        
        function get_last_ten_entries()
        {
            $query = $this->db->get('job', 10);
            return $query->result();
        }
    }
?>
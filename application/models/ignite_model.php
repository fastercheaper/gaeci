<?php

class Ignite_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function insert_entry()
    {
        $rec['name'] = 'Ravi K';
        $rec['email'] = 'ravi@ravik.com';
  
        $this->db->insert('test', $rec);
    }
    
    function get_all()
    {
        $query = $this->db->query("select * from test");
        $arr = $query->result_array();
        echo "<h3>Records found " . sizeof($arr) . "</h3>";
        
        foreach ($arr as $row)
        {
           echo $row['name'];
           echo $row['email'];
           echo '<br>';
        }
    }
}

?>
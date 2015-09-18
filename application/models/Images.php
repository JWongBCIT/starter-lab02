<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Images
 *
 * @author jason
 */
class Images extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    //Gets all images from the database
    function all() {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('images');
        return $query->result_array();
    }

    //Gets the 3 newest images from the database
    function newest(){
        $this->db->order_by("id", "desc");
        $this->db->limit(3);
        $query = $this->db->get("images");
        return $query->result_array();
    }
}

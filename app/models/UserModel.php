<?php

class User_model  {
    
    public function __construct() {
        $this->load->database();
    }

    // Retrieve all users
    public function get_all_users() {
        return $this->db->get('users')->result_array();
    }

    // Retrieve a user by ID
    public function get_user_by_id($user_id) {
        return $this->db->where('id', $user_id)->get('users')->row_array();
    }

    // Add a new user
    public function add_user($user_data) {
        return $this->db->insert('users', $user_data);
    }

    // Update an existing user
    public function update_user($user_id, $user_data) {
        return $this->db->where('id', $user_id)->update('users', $user_data);
    }

    // Delete a user
    public function delete_user($user_id) {
        return $this->db->where('id', $user_id)->delete('users');
    }
}

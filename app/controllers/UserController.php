<?php

class User extends Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    // Display all users
    public function index() {
        $data['users'] = $this->User_model->get_all_users();
        $this->load->view('user/index', $data);
    }

    // Show user details
    public function show($id) {
        $data['user'] = $this->User_model->get_user_by_id($id);
        $this->load->view('user/show', $data);
    }

    // Show the form to create a new user
    public function create() {
        $this->load->view('user/create');
    }

    // Store a new user
    public function store() {
        $user_data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
        ];

        if ($this->User_model->add_user($user_data)) {
            redirect('user/index');
        } else {
            show_error('Failed to create user.');
        }
    }

    // Show the form to edit an existing user
    public function edit($id) {
        $data['user'] = $this->User_model->get_user_by_id($id);
        $this->load->view('user/edit', $data);
    }

    // Update an existing user
    public function update($id) {
        $user_data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
        ];

        if ($this->User_model->update_user($id, $user_data)) {
            redirect('user/index');
        } else {
            show_error('Failed to update user.');
        }
    }

    // Delete a user
    public function delete($id) {
        if ($this->User_model->delete_user($id)) {
            redirect('user/index');
        } else {
            show_error('Failed to delete user.');
        }
    }
}

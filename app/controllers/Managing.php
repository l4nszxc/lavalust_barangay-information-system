<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Managing extends Controller {

    public function __construct() {
        parent::__construct();
        
        if(! logged_in()) {
            redirect('auth');
        }
    }

	public function index() {
        $this->call->view('ManageOfficers');
    }

    public function accomplished() {
        $this->call->view('admin/accomplished');
    }

    public function addofficers() {
        $this->call->view('admin/AddOfficers');
    }

    public function announcements() {
        $this->call->view('admin/Announcements');
    }

    public function create() {
        $this->call->view('admin/create');
    }

    public function editofficers() {
        $this->call->view('admin/EditOfficers');
    }

}

    

    



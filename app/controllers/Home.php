<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Home extends Controller {

    public function __construct() {
        parent::__construct();
        
        if(! logged_in()) {
            redirect('auth');
        }
    }

	public function index() {
        $this->call->view('homepage');
    }

    public function officers() {
        $this->call->view('users/officers');
    }

    public function dashboard() {
        $this->call->view('users/dashboard');
    }

    public function accomplished() {
        $this->call->view('users/accomplished');
    }

    public function announcement() {
        $this->call->view('users/announcement');
    }
    public function photogallery() {
        $this->call->view('users/photogallery');
    }
}
?>

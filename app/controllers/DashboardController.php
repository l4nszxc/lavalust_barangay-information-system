<?php

class DashboardController extends Controller {
    // Show the Dashboard
    public function index() {
        // Fetch data for the dashboard from the model
        $data = Dashboard::getMetrics();
        
        // Include the view to render the dashboard with data
        require APP_DIR . 'views/dashboard.php';
    }
}


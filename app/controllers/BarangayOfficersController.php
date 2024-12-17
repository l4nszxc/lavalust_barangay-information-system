<?php

class BarangayOfficersController extends Controller
{
    private $officerModel;

    public function __construct($officerModel)
    {
        $this->officerModel = $officerModel;
    }

    /**
     * Display the Barangay Officers page.
     */
    public function index()
    {
        // Fetch officers from the model
        $officers = $this->officerModel->getAllOfficers();

        // Pass data to the view
        include APP_DIR . 'views/barangay-officers.php';
    }
}

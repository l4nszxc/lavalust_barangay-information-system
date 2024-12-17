<?php

class AnnouncementsController extends Controller {
    // Display all announcements to the users
    public function index() {
        // Fetch all announcements from the model
        $announcements = Announcement::getAllAnnouncements();

        // Include the view to display announcements
        require APP_DIR . 'views/announcements/index.php';
    }

    // Show the form to allow admin to upload a new announcement
    public function create() {
        require APP_DIR . 'views/announcements/create.php';
    }

    // Handle the form submission to store the announcement
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Validate and sanitize inputs
            $title = htmlspecialchars($_POST['title']);
            $description = htmlspecialchars($_POST['description']);
            $announcement_date = $_POST['announcement_date'];

            // Handle the image upload if there's one
            $image = $_FILES['image']['name'];
            $target_dir = "public/uploads/announcements/";
            $target_file = $target_dir . basename($image);

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                // Store the announcement in the database
                $announcement = new Announcement();
                $announcement->create($title, $description, $announcement_date, $target_file);

                // Redirect to the announcements page
                header("Location: /announcements");
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}

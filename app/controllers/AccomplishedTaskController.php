<?php

class AccomplishedTaskController extends Controller {
    // Display all accomplished tasks to the users
    public function index() {
        // Fetch all the accomplished tasks from the model
        $tasks = AccomplishedTask::getAllTasks();

        // Include the view to display tasks
        require APP_DIR . 'views/accomplished/index.php';
    }

    // Show the form to allow admin to upload a new accomplished task
    public function create() {
        require APP_DIR . 'views/accomplished/create.php';
    }

    // Handle the form submission to store the accomplished task
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Validate and sanitize inputs
            $description = htmlspecialchars($_POST['description']);
            $task_date = $_POST['task_date'];

            // Handle the image upload
            $image = $_FILES['image']['name'];
            $target_dir = "public/uploads/accomplished/";
            $target_file = $target_dir . basename($image);

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                // Store the task in the database
                $task = new AccomplishedTask();
                $task->create($description, $task_date, $target_file);

                // Redirect to the accomplished tasks page
                header("Location: /accomplished");
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}

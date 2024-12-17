<?php
class Admin
{
    private $officerModel;

  
    // Display all officers
    public function index()
    {
        $officers = $this->officerModel->updateOfficer();
        include APP_DIR . 'views/admin/AddOfficers.php';
    }

    // Show form for adding an officer
    public function showAddForm()
    {
        include APP_DIR . 'views/admin/officers/add.php';
    }

    // Add a new officer
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $image = $_FILES['image']['name'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $address = $_POST['address'];
            $contactNumber = $_POST['contact_number'];
            $position = $_POST['position'];

            // Upload image
            $targetDir = APP_DIR . 'public/uploads/officers/';
            $targetFile = $targetDir . basename($image);
            move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);

            $this->officerModel->addOfficer($image, $name, $age, $address, $contactNumber, $position);
            header('Location: /admin/officers');
        }
    }

    // Show form for editing an officer
    public function showEditForm($id)
    {
        $officer = $this->officerModel->getOfficerById($id);
        include APP_DIR . 'views/admin/officers/edit.php';
    }

    // Edit an officer
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $image = $_FILES['image']['name'] ? $_FILES['image']['name'] : $_POST['existing_image'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $address = $_POST['address'];
            $contactNumber = $_POST['contact_number'];
            $position = $_POST['position'];

            // Upload new image if provided
            if ($_FILES['image']['name']) {
                $targetDir = APP_DIR . 'public/uploads/officers/';
                $targetFile = $targetDir . basename($image);
                move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);
            }

            $this->officerModel->updateOfficer($id, $image, $name, $age, $address, $contactNumber, $position);
            header('Location: /admin/officers');
        }
    }

    // Delete an officer
    public function delete($id)
    {
        $this->officerModel->deleteOfficer($id);
        header('Location: /admin/officers');
    }
}

?>
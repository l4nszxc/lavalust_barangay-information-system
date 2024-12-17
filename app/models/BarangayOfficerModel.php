<?php

class BarangayOfficerModel
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * Fetch all barangay officers from the database.
     *
     * @return array
     */
    public function updateOfficer($id, $image, $name, $age, $address, $contactNumber, $position)
    {
        $query = "UPDATE barangay_officers 
                  SET image = ?, name = ?, age = ?, address = ?, contact_number = ?, position = ? 
                  WHERE id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$image, $name, $age, $address, $contactNumber, $position, $id]);
        return $stmt->rowCount(); // Returns the number of rows affected
    }
    
}

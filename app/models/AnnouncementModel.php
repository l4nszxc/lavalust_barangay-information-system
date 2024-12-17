<?php

class Announcement {
    // Fetch all announcements from the database
    public static function getAllAnnouncements() {
        $db = Database::connect();
        
        // Query to get all announcements
        $stmt = $db->query('SELECT * FROM announcements ORDER BY announcement_date DESC');
        
        // Fetch all announcements as an associative array
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Method to create a new announcement
    public function create($title, $description, $announcement_date, $image) {
        $db = Database::connect();
        
        // Prepare query to insert the new announcement
        $stmt = $db->prepare("INSERT INTO announcements (title, description, announcement_date, image) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $description, $announcement_date, $image]);
    }
}

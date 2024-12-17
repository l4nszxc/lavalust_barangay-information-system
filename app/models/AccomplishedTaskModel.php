<?php

class AccomplishedTask {
    // Fetch all accomplished tasks from the database
    public static function getAllTasks() {
        $db = Database::connect();
        
        // Query to get all accomplished tasks
        $stmt = $db->query('SELECT * FROM accomplished_tasks ORDER BY task_date DESC');
        
        // Fetch all tasks as an associative array
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Method to create a new accomplished task
    public function create($description, $task_date, $image) {
        $db = Database::connect();
        
        // Prepare query to insert the new task
        $stmt = $db->prepare("INSERT INTO accomplished_tasks (description, task_date, image) VALUES (?, ?, ?)");
        $stmt->execute([$description, $task_date, $image]);
    }
}

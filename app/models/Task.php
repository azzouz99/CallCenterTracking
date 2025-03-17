<?php
require_once "../core/Model.php";

class Task extends Model {
    
    // Get all tasks
    public function getAllTasks() {
        $stmt = $this->db->prepare("SELECT * FROM tasks ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Get a single task by ID
    public function getTaskById($id) {
        $stmt = $this->db->prepare("SELECT * FROM tasks WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Add a new task
    public function addTask($title, $description) {
        $stmt = $this->db->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
        return $stmt->execute([$title, $description]);
    }

    // Update an existing task
    public function updateTask($id, $title, $description, $status) {
        $stmt = $this->db->prepare("UPDATE tasks SET title = ?, description = ?, status = ? WHERE id = ?");
        return $stmt->execute([$title, $description, $status, $id]);
    }

    // Delete a task
    public function deleteTask($id) {
        $stmt = $this->db->prepare("DELETE FROM tasks WHERE id = ?");
        return $stmt->execute([$id]);
    }
}

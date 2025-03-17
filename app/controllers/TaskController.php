<?php
namespace App\Controllers;

use App\Models\Task;
use Core\Controller;

class TaskController extends Controller {
    private $taskModel;

    public function __construct() {
        $this->taskModel = new Task();
    }

    // Display all tasks
    public function index() {
        $tasks = $this->taskModel->getAllTasks();
        $this->view("tasks/index", ["tasks" => $tasks]);
    }

    // Show a single task
    public function show($id) {
        $task = $this->taskModel->getTaskById($id);
        if (!$task) {
            die("Task not found!");
        }
        $this->view("tasks/show", ["task" => $task]);
    }

    // Create a new task
    public function store() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST['title'];
            $description = $_POST['description'];

            if ($this->taskModel->addTask($title, $description)) {
                header("Location: /tasks");
                exit();
            } else {
                die("Failed to create task.");
            }
        }
        $this->view("tasks/create");
    }

    // Update a task
    public function update($id) {
        $task = $this->taskModel->getTaskById($id);
        if (!$task) {
            die("Task not found!");
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $status = $_POST['status'];

            if ($this->taskModel->updateTask($id, $title, $description, $status)) {
                header("Location: /tasks");
                exit();
            } else {
                die("Failed to update task.");
            }
        }
        $this->view("tasks/edit", ["task" => $task]);
    }

    // Delete a task
    public function delete($id) {
        if ($this->taskModel->deleteTask($id)) {
            header("Location: /tasks");
            exit();
        } else {
            die("Failed to delete task.");
        }
    }
}

<?php
namespace Core;

class App {
    protected $controller = "App\\Controllers\\HomeController"; // Use the full namespace
    protected $method = "index";
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Check if controller exists
        if (!empty($url[0]) && file_exists("../app/controllers/" . ucfirst($url[0]) . ".php")) {
            $this->controller = "App\\Controllers\\" . ucfirst($url[0]);
            unset($url[0]);
        }

        // Load controller class
        if (class_exists($this->controller)) {
            $this->controller = new $this->controller;
        } else {
            die("Controller not found: " . $this->controller);
        }

        // Check if method exists
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // Remaining values are parameters
        $this->params = $url ? array_values($url) : [];

        // Call the method
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl() {
        if (isset($_GET['url'])) {
            return explode("/", filter_var(rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL));
        }
        return ["HomeController"];
    }
}

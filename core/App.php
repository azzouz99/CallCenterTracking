<?php
namespace Core;

class App {
    protected $controller = "App\\Controllers\\HomeController"; // Default controller
    protected $method = "index";
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        // Load routes
        $routes = require "../routes/web.php";

        // Convert route array keys to remove starting "/"
        $formattedRoutes = [];
        foreach ($routes as $key => $value) {
            $formattedRoutes[ltrim($key, "/")] = $value;
        }



        // Build route path
        $path = implode("/", $url);

        // Check if path exists in routes
        if (isset($formattedRoutes[$path])) {
            list($controller, $method) = explode("@", $formattedRoutes[$path]);
            $this->controller = "App\\Controllers\\" . $controller;
            $this->method = $method;
        } else {
            die("❌ Route Not Found: " . $path);
        }



        // Instantiate the controller
        if (class_exists($this->controller)) {
            $this->controller = new $this->controller;
        } else {
            die("❌ Controller Not Found: " . $this->controller);
        }

        // Check if method exists
        if (!method_exists($this->controller, $this->method)) {
            die("❌ Method Not Found: " . $this->method);
        }

        // Call the method
        call_user_func([$this->controller, $this->method]);
    }

    private function parseUrl() {
        if (isset($_GET['url'])) {
            return explode("/", filter_var(rtrim($_GET['url'], "/"), FILTER_SANITIZE_URL));
        }
        return ["home"];
    }
}

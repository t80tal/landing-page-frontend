<?php
namespace TourismLandingPage;

class Route
{
    private static $routes = [];

    public static function add(string $uri, callable $function, string $method = 'GET')
    {
        $uri = trim($uri, '/');
        $uri = filter_var($uri, FILTER_SANITIZE_URL);

        self::$routes[$method][$uri] = $function;
    }

    public static function submit(): void
    {
        try {
            $uri = isset($_SERVER['REQUEST_URI']) ? explode('?', $_SERVER['REQUEST_URI'])[0] : '/';
            $uri = trim($uri, '/');
            $uri = filter_var($uri, FILTER_SANITIZE_URL);

            $method = $_SERVER['REQUEST_METHOD'];

            if (isset(self::$routes[$method][$uri])) {
                call_user_func(self::$routes[$method][$uri]);
            } else {
                http_response_code(404);
                require __DIR__ . '/views/404.php';
            }
        } catch (\Exception $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
}
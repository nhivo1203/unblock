<?php

namespace app\core;

use function is_string;

class Router
{
    /**
     * @var
     */

    public Request $request;
    protected array $routes = [];

    /**
     * @param Request $request
     */
    public function __construct(\app\core\Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param $view
     * @return void
     */
    public function renderView($view): string {
        include_once (__DIR__ .  "../Views/$view.php");
    }

    /**
     * @param $path
     * @param $callback
     * @return void
     */
    public function get($path, $callback): void
    {
        $this->routes['get'][$path] = $callback;
    }

    /**
     * @return string
     */
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if ($callback === false) {
            echo "Not Found";
        }
        if(is_string($callback)) {
            return $this->renderView($callback);
        }
        return call_user_func($callback);
    }
}

<?php

namespace Nhivonfq\Unlock\Core;
/**
 * Class Application
 * @package app\core
 */
class Application
{
    /**
     * @var string
     */
    public static string $ROOT_DIR;
    /**
     * @var Application
     */
    public static Application $app;
    /**
     * @var Router
     */
    public Router $router;
    /**
     * @var Request
     */
    public Request $request;
    /**
     * @var Response
     */
    public Response $response;

    /**
     * @param $rootPath
     */
    public function __construct()
    {
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request);
    }

    /**
     * @return void
     */
    public function run()
    {
        echo $this->router->resolve();
    }
}

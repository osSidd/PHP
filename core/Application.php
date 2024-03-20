<?php

    namespace app\core; //namespace declaration must be the first thing in a php file

    class Application{
        public static string $ROOT_DIR;
        public static Application $app;
        public Router $router;
        public Request $request;
        public Response $response;

        public function __construct($root_path) 
        {
            self::$ROOT_DIR = $root_path;
            self::$app = $this;
            $this->request = new Request();
            $this->response = new Response();
            $this->router = new Router($this->request, $this->response);
        }

        public function run()
        {
            echo $this->router->resolve();
        }
    }
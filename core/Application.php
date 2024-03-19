<?php

    namespace app\core; //namespace declaration must be the first thing in a php file

    class Application{
        public Router $router;
        public Request $request;
        public function __construct() 
        {
            $this->request = new Request();
            $this->router = new Router($this->request);
        }

        public function run()
        {
            $this->router->resolve();
        }
    }
<?php

    namespace app\core;

    class Application{
        public function __construct() {
            $this->router = new Router();
        }
    }
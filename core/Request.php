<?php

    namespace app\core;

    class Request
    {
        public function getPath()
        {
            $path = $_SERVER['REQUEST_URI'] ?? '/';

            $path = explode('?', $path);

            return $path[0];
        }

        public function getMethod()
        {
            return strtolower($_SERVER['REQUEST_METHOD']);
        }
    }
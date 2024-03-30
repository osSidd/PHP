<?php
    namespace app\core;

    class Router{
        protected array $routes = [];
        public Request $request;
        public Response $response;

        public function __construct(Request $request, Response $response)
        {
            $this->request = $request;
            $this->response = $response;
        }

        public function get($path, $callback)
        {
            $this->routes['get'][$path] = $callback;
        }

        public function post($path, $callback)
        {
            $this->routes['post'][$path] = $callback;
        }

        public function resolve()
        {
           $path = $this->request->getPath();
           $method = $this->request->getMethod();

           $callback = $this->routes[$method][$path] ?? false;

           if(!$callback){
                // Application::$app->response->setStatusCode(404);
                $this->response->setStatusCode(404);
                return $this->renderView('_404');
           }

           if(is_string($callback)) return $this->renderView($callback);

           if(is_array($callback)){
           
            $callback[0] = new $callback[0]();
            return call_user_func($callback);
           }

           else return call_user_func($callback);
        }

        public function renderView($view, $params=[])
        {
            $layout_content = $this->layoutContent();
            $view_content = $this->renderOnlyView($view, $params);
            return str_replace('{{content}}', $view_content, $layout_content);
        }

        protected function layoutContent()
        {
            ob_start();
            include_once Application::$ROOT_DIR."/views/layout/main.php";
            return ob_get_clean();
        }

        protected function renderOnlyView($view, $params=[])
        {
            foreach($params as $key => $value){
                $$key = $value;
            }
            ob_start();
            include_once Application::$ROOT_DIR."/views/$view.php";
            return ob_get_clean();
        }

    }
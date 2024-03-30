<?php
    namespace app\controllers;

    use app\core\Application;
    use app\core\Controller;

    class SiteController extends Controller
    {
        public function home()
        {
            $params = ['name' => 'The Xmen'];
            return $this->render('home', $params);
        }


        public function getContact()
        {
            return $this->render('contact');
        }

        public static function postContact()
        {
            return 'Post contact form';
        }
    }
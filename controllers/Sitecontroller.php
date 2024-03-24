<?php
    namespace app\controllers;

    use app\Core\Application;

    class SiteController
    {
        public static function getContact()
        {
            return Application::app->Router->renderView('contact');
        }
    }
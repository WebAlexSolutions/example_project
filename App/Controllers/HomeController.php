<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to Example Project',
        ];

        $this->render('home', $data);
    }

    private function render($template, $data = [])
    {
        extract($data);
        require 'views/templates/header.php';
        require 'views/{$template}.php';
        require 'views/templates/footer.php';
    }
}
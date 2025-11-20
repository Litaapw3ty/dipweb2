<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): void
    {
        echo view('Layout/header');
        echo view('Layout/home');
        echo view('Layout/footer');
    }
}

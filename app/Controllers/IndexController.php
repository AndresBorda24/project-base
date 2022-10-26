<?php
namespace App\Controllers;
use App\Helpers\View;

class IndexController
{
    public function index()
    {       
        View::load('index');
    }
}
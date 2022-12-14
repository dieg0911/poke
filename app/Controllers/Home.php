<?php

namespace App\Controllers;




// XD




class Home extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('tables');
        echo view('footer');
    }
}

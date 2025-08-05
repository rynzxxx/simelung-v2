<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        // cukup panggil view about
        return view('about_view');
    }
}

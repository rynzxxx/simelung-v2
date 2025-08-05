<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function dashboard()
    {
        // Tampilkan halaman dashboard untuk admin
        return view('admin_dashboard_view');
    }
}

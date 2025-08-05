<?php

namespace App\Controllers;

class SuperAdminController extends BaseController
{
    public function dashboard()
    {
        // Tampilkan halaman dashboard untuk superadmin
        return view('superadmin_dashboard_view');
    }
}

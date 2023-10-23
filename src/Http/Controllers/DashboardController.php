<?php

namespace SimbaJirira\AdminDashboard\Http\Controllers;

use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin-dashboard::pages.dashboard');
    }
}

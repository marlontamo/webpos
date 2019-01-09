<?php

namespace App\Http\Controllers;

use App\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend/index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $applications = Application::all();
        return view('admin.dashboard', compact('applications'));
    }
}

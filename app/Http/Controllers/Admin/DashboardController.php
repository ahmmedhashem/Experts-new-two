<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index(){
        $areas = Category::with('users')->get();

        $movies = Category::whereHas('users', function($q) {
            $q->select('name');
        })->get();


        // return $areas;
        return view('admin.dashboard');
    }


}



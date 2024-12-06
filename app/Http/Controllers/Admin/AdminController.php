<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        // Fake sales data for all months
        $salesData = [
            'January' => rand(100, 1000),
            'February' => rand(100, 1000),
            'March' => rand(100, 1000),
            'April' => rand(100, 1000),
            'May' => rand(100, 1000),
            'June' => rand(100, 1000),
            'July' => rand(100, 1000),
            'August' => rand(100, 1000),
            'September' => rand(100, 1000),
            'October' => rand(100, 1000),
            'November' => rand(100, 1000),
            'December' => rand(100, 1000),
        ];

        return view('admin.index', compact('salesData'));
    }

 
    
}

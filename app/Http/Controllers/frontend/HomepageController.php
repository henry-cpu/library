<?php

namespace App\Http\Controllers\frontend;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function show()
    {

        return view('auth/login');
    }
}

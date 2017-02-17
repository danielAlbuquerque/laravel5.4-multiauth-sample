<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    /**
     * Index admin
     * @return Illuminate\Routing\view
     */
    public function index() 
    {
    	return view('admin-home');
    }

    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenderViewEmail extends Controller
{
    public function email($data){
    	return view('Email.' . $data);
    }
}

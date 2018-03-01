<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TipsController extends Controller
{
    public function showTips()
    {
    	return view('admin.tips.showtips');
    }
}

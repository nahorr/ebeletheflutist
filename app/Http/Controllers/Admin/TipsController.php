<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tip;

class TipsController extends Controller
{
    public function showTips()
    {
    	
    	$tips = Tip::all();

    	return view('admin.tips.showtips', compact('tips'));
    }

    public function addTip()
    {
    	return view('admin.tips.addtip');
    }

    public function postAddTip()
    {
    	return back();	
    }

    public function editTip($tip_id)
    {
    	return view('admin.tips.edittip');
    }

    public function postEditTip()
    {
    	return back();
    }

    public function deleteTip($tip_id)
    {
    	return back();
    }
}

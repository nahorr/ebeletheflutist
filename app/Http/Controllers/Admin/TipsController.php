<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tip;
use File;
use Carbon\Carbon;

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

    public function postAddTip(Request $request)
    {

        $this->validate(request(), [

            'tip_title' => 'required',
            'tip_body' => 'required',
            'tip_image' => 'mimes:jpg,jpeg,bmp,png|max:10000',
            
        ]);

        
        $tip_body=$request->input('tip_body');
        $dom = new \DomDocument();
        $dom->loadHtml($tip_body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $tip_body = $dom->saveHTML();

        if($request->hasFile('tip_image')){
            $tip_image = $request->file('tip_image');
            $filename = time() . '.' . $tip_image->getClientOriginalExtension();
            $destinationPath = public_path().'/tips/images/' ;
            $tip_image->move($destinationPath,$filename);
            
        } else {
            $filename = $request->tip_image;
        }
        
        Tip::insert([

            'tip_title'=>$request->tip_title,
            'tip_body'=>$tip_body,
            'tip_image'=>$filename,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

   
        
        flash('Tip Added Successfully')->success();

        return redirect()->route('showtips');


    }

    public function editTip($tip_id)
    {

        $tip = Tip::find($tip_id);

    	return view('admin.tips.edittip', compact('tip'));
    }

    public function postEditTip(Request $request, $tip_id)
    {
        $tip = Tip::find($tip_id);

        $this->validate(request(), [

            'tip_title' => 'required',
            'tip_body' => 'required',
            'tip_image' => 'mimes:jpg,jpeg,bmp,png|max:10000',
            
        ]);

        
        $tip_body=$request->input('tip_body');
        $dom = new \DomDocument();
        $dom->loadHtml($tip_body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $tip_body = $dom->saveHTML();

        if($request->hasFile('tip_image')){
            $tip_image = $request->file('tip_image');
            $filename = time() . '.' . $tip_image->getClientOriginalExtension();
                // Delete current image before uploading new image
                if($tip->tip_image !== null) {
                     $file = public_path('tips/images/' . $tip->tip_image);

                    if (File::exists($file)) {
                        unlink($file);
                    }

                }

            $destinationPath = public_path().'/tips/images/' ;
            $tip_image->move($destinationPath,$filename);
            
        } else {
            $filename = $request->tip_image;
        }

    	$tip_edit = Tip::where('id', '=', $tip->id)->first();
        
        $tip_edit->tip_title= $request->tip_title;
        $tip_edit->tip_body= $tip_body;
        $tip_edit->tip_image= $filename;
        
        $tip_edit->save();

        
        flash('Tip Updated Successfully')->success();

        return redirect()->route('showtips');

    }

    public function deleteTip($tip_id)
    {
    	Tip::destroy($tip_id);

        flash('Record has been deleted')->error();

        return back();
    }
}

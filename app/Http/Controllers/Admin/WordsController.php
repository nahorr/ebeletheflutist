<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Word;
use File;



class WordsController extends Controller
{
    public function showWords()
    {
    	
    	$words = word::all();

    	return view('admin.words.showwords', compact('words'));
    }

    public function addWord()
    {
    	return view('admin.words.addword');
    }

    public function postAddWord(Request $request)
    {

        $this->validate(request(), [

            'word_title' => 'required',
            'word_body' => 'required',
            'word_image' => 'mimes:jpg,jpeg,bmp,png|max:10000',
            
        ]);

        
        $word_body=$request->input('word_body');
        $dom = new \DomDocument();
        $dom->loadHtml($word_body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $word_body = $dom->saveHTML();

        if($request->hasFile('word_image')){
            $word_image = $request->file('word_image');
            $filename = time() . '.' . $word_image->getClientOriginalExtension();
            $destinationPath = public_path().'/words/images/' ;
            $word_image->move($destinationPath,$filename);
            
        } else {
            $filename = $request->word_image;
        }
        
        Word::insert([

            'word_title'=>$request->word_title,
            'word_body'=>$word_body,
            'word_image'=>$filename,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

   
        
        flash('Word Added Successfully')->success();

        return redirect()->route('showwords');


    }

    public function editWord(Word $word)
    {

        $word = Word::find($word->id);

    	return view('admin.words.editword', compact('word'));
    }

    public function postEditWord(Request $request, Word $word)
    {

        $this->validate(request(), [

            'word_title' => 'required',
            'word_body' => 'required',
            'word_image' => 'mimes:jpg,jpeg,bmp,png|max:10000',
            
        ]);

        
        $word_body=$request->input('word_body');
        $dom = new \DomDocument();
        $dom->loadHtml($word_body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $word_body = $dom->saveHTML();

        if($request->hasFile('word_image')){
            $word_image = $request->file('word_image');
            $filename = time() . '.' . $word_image->getClientOriginalExtension();
                // Delete current image before uploading new image
                if($word->word_image !== null) {
                     $file = public_path('words/images/' . $word->word_image);

                    if (File::exists($file)) {
                        unlink($file);
                    }

                }

            $destinationPath = public_path().'/words/images/' ;
            $word_image->move($destinationPath,$filename);
            
        } else {
            $filename = $request->word_image;
        }

    	$word_edit = Word::where('id', '=', $word->id)->first();
        
        $word_edit->word_title= $request->word_title;
        $word_edit->word_body= $word_body;
        $word_edit->word_image= $filename;
        
        $word_edit->save();

        
        flash('word Updated Successfully')->success();

        return redirect()->route('showwords');

    }

    public function deleteWord(Word $word)
    {
    	Word::where('id', '=', $word->id)->delete();

        flash('Record has been deleted')->error();

        return back();
    }
}

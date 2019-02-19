<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Word;

class WordsController extends Controller
{
    public function wordsByEbele()
    {
    	$words = Word::all();

        return view('homepublic.wordsbyebele', compact('words'));
    }

    public function showWordsByEbele( Word $word)
    {

        $latest_words = Word::all();

        return view('homepublic.showwordsbyebele', compact('word', 'latest_words'));
    }
}

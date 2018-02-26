<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	return view('homepublic.index');
    }

    public function musicAudios()
    {
    	return view('homepublic.music.audios');
    }

    public function musicVideos()
    {
    	return view('homepublic.music.videos');
    }

    public function musicLyrics()
    {
    	return view('homepublic.music.musicLyrics');
    }

    public function musicTraining()
    {
    	return view('homepublic.music.training');
    }

    public function about()
    {
    	return view('homepublic.about');
    }

    public function contact()
    {
    	return view('homepublic.contact');
    }

    public function musicFluteTrainingTipsByEbele()
    {
    	return view('homepublic.musicflutetrainingtipsbyebele');
    }
}

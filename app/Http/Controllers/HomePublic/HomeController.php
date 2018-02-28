<?php

namespace App\Http\Controllers\HomePublic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


use Carbon\Carbon;
use Crypt;
use App\Traits\CaptchaTrait;
use File;
use App\User;
use App\ContactUs;
use Mail;

class HomeController extends Controller
{
    use CaptchaTrait;

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

    public function postContactForm(Request $request)
    {
        $request['captcha'] = $this->captchaCheck();

        $this->validate($request, [
        'full_name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'message' => 'required',
        'g-recaptcha-response' => 'required',
        'captcha' => 'required|min:1',
        ],
        [
         'g-recaptcha-response.required' => 'Captcha is required',
         'captcha.min' => 'Wrong captcha, please try again.'
        ]);

        $contactus = ContactUs::insert([
        'full_name'=>$request->full_name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'message'=>$request->message,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ]);

        //$user = User::first();
 
        //$user->notify(new ContactFormSubmitted("A new contact form has been submitted."));


        $full_name = $request->input('full_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $user_message = $request->input('message');

        Mail::send('emails.contactform', 
            [
                'full_name' => $full_name, 
                'email' => $email, 
                'phone' => $phone,
                'user_message' => $user_message
            ], 

            function ($m)
            {
                
                $m->from(Input::get('email'), Input::get('full_name'));

                $m->to('ebele@ebeletheflutist.com');

            });

       flash('Your message was sent successfully. We will be contacting you soon!')->success();
      
       return back();  
    }

    public function musicFluteTrainingTipsByEbele()
    {
    	return view('homepublic.musicflutetrainingtipsbyebele');
    }
}

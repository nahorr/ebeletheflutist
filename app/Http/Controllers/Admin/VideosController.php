<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use File;
use Carbon\Carbon;

class VideosController extends Controller
{
    public function showVideos()
    {
    	
    	$videos = Video::all();

    	return view('admin.videos.showvideos', compact('videos'));
    }

    public function addVideo()
    {
    	return view('admin.videos.addvideo');
    }

    public function postAddVideo(Request $request)
    {

        $this->validate(request(), [

            'video_title' => 'required',
            'video_link' => 'required',   
        ]);
         
        Video::insert([

            'video_title'=>$request->video_title,
            'video_link'=>$request->video_link,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

   
        
        flash('Youtube Video link Added Successfully')->success();

        return redirect()->route('showvideos');


    }

    public function editVideo($video_id)
    {

        $video = Video::find($video_id);

    	return view('admin.videos.editvideo', compact('video'));
    }

    public function postEditVideo(Request $request, $video_id)
    {
        $video = Video::find($video_id);

        $this->validate(request(), [

            'video_title' => 'required',
            'video_link' => 'required',
            
        ]);
 

    	$video_edit = Video::where('id', '=', $video->id)->first();
        
        $video_edit->video_title= $request->video_title;
        $video_edit->video_link= $request->video_link;
        
        $video_edit->save();

        
        flash('YouTube Video Link Updated Successfully')->success();

        return redirect()->route('showvideos');

    }

    public function deleteVideo($video_id)
    {
    	Video::destroy($video_id);

        flash('Record has been deleted')->error();

        return back();
    }
}

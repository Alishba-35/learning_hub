<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use Illuminate\Support\Facades\Storage; // Import Storage facade

class VideoController extends Controller
{
    public function shortStudy()
    {
        // Fetch all videos, ordered by creation date (newest first)
        $videos = Video::orderBy('created_at', 'desc')->get();
// dd($videos);
        // You might still want to separate them for display purposes
        // $onlineVideos = $videos->where('platform', 'youtube');
        // $downloadedReels = $videos->where('platform', 'local');

        return view('layouts.shorts_reels', compact('videos'));
    }

    public function jsShortStudy()
    {
        // Fetch videos from DB
        // $onlineVideos = Video::where('platform', 'youtube')->get();
        // $downloadedReels = Video::where('platform', 'local')->get();
         $videos = Video::orderBy('created_at', 'desc')->get();
// dd($videos);
        return view('layouts.js_shorts_reels', compact('videos'));
    }
    
public function upload(Request $request)
{
    $request->validate([
    'title' => 'required|string|max:255',
    'upload_type' => 'required|in:file,url',
    'video_file' => 'required_if:upload_type,file|nullable|mimes:mp4,avi,mov,wmv|max:20480',
    'youtube_url' => 'required_if:upload_type,url|nullable|url'
]);


    $video = new Video();
    $video->title = $request->title;

    if ($request->upload_type === 'file') {
        // Save local video
        $fileName = time() . '.' . $request->video_file->extension();
        $request->video_file->move(public_path('videos'), $fileName);

        $video->file = $fileName;
        $video->platform = 'local';
        $video->url = null;
    } else {
        // Save YouTube URL
        $video->platform = 'youtube';
        $video->file = null;
        $video->url = $request->youtube_url;
    }

    $video->uploaded_by = auth()->check() ? auth()->user()->id : 'admin';
    $video->save();

    return back()->with('success', 'Video uploaded successfully!');
}



//    public function upload(Request $request)
// {
//     $request->validate([
//         'title' => 'required|string|max:255',
//         'upload_type' => 'required|in:file,url',
//         'video_file' => 'required_if:upload_type,file|file|mimes:mp4,mov,ogg,qt|max:204800',
//         'youtube_url' => 'required_if:upload_type,url|url',
//     ]);

//     $user = Auth::user();
//     if (!$user) {
//         return back()->withErrors(['error' => 'You must be logged in to upload videos.']);
//     }

//     try {
//         $uploadType = $request->upload_type;
        
//         if ($uploadType === 'file') {
//             // Handle file upload
//             $path = $request->file('video_file')->store('videos', 'public');
            
//             Video::create([
//                 'title' => $request->title,
//                 'file' => $path,
//                 'url' => null, // Explicitly set URL to null
//                 'platform' => 'local',
//                 'user_id' => $user->id,
//                 'uploaded_by' => 'user',
//             ]);
            
//         } else if ($uploadType === 'url') {
//             // Handle YouTube URL
//             Video::create([
//                 'title' => $request->title,
//                 'file' => null, // Explicitly set file to null
//                 'url' => $request->youtube_url,
//                 'platform' => 'youtube',
//                 'user_id' => $user->id,
//                 'uploaded_by' => 'user',
//             ]);
//         }

//         return redirect()->route('short-study')->with('success', 'Video uploaded successfully!');
//     } catch (\Exception $e) {
//         return back()->withErrors(['error' => 'Failed to upload video: ' . $e->getMessage()]);
//     }
// }

}
@extends('layouts.js_reels_layout')

@section('content')

<style>
    .video-gallery {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        padding: 20px;
    }

    .video-item {
   
        border-radius: 12px;
        padding: 15px;
        box-shadow: 0 4px 12px rgba(138, 137, 142, 0.1);
        max-width: 360px;
        width: 100%;
        text-align: center;
    }

    .video-item iframe,
    .video-item video {
 display: block;
        width: 100%;
        height: 640px; /* Instagram Reel-like height */
        object-fit: cover;
        border-radius: 10px;
    }

    h1, h2 {
        text-align: center;
        margin-bottom: 30px;
    }

    .container.text-center {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<h1>Short Study Videos</h1>

<!-- ========== UPLOAD FORM SECTION ========== -->

<!-- ========== VIDEO DISPLAY SECTION ========== -->
<!-- ADD YOUR VIDEO DISPLAY CODE RIGHT HERE -->

<div class="container text-center">


    @if(isset($videos) && $videos->count() > 0)
        <div class="video-gallery">
            @foreach($videos as $video)
                <div class="video-item col-md-6 col-lg-4 mb-4">
                   
                    <p>Uploaded by: {{ $video->uploaded_by === 'admin' ? 'Admin' : ($video->user->name ?? 'Unknown User') }}</p>

                    @if($video->platform === 'youtube' && $video->url)
                        <!-- YouTube Video -->
                        <iframe src="{{ $video->url }}" frameborder="0" allowfullscreen></iframe>
                        

                    @elseif($video->platform === 'local' && $video->file)
                        <!-- Local Video -->
                        <video controls>
                            <source src="{{ asset('videos/' . $video->file) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @else
                        <p>Video content not available.</p>
                    @endif
                </div>
            @endforeach
        </div>
    @else
        <p>No videos available yet.</p>
    @endif
</div>

@endsection

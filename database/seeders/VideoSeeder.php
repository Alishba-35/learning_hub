<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    public function run(): void
    {
        // YouTube videos
        $youtubeVideos = [
            [
                'title' => 'Learn HTML Basics',
                'url' => 'https://www.youtube.com/embed/YkvCnkzZ18s?si=LgjKoXpqXVKidmPF',
            ],
            [
                'title' => 'CSS Crash Course',
                'url' => 'https://www.youtube.com/embed/YkvCnkzZ18s?si=k4Xu81dCDLWFT71n',
            ],
            [
                'title' => 'JavaScript Introduction',
                'url' => 'https://www.youtube.com/embed/D05UOBvXUjM?si=k__Fk_sfkayP8kHs',
            ],
            [
                'title' => 'JavaScript Introduction',
                'url' => 'https://www.youtube.com/embed/tPMzFNZe7lk?si=dxDHO76z6T7XbWiP',
            ],
            [
                'title' => 'JavaScript Introduction',
                'url' => 'https://www.youtube.com/embed/GOa9JrJ3hDE?si=UBQUOBo9q2TKSqNW',
            ],
            [
                'title' => 'JavaScript Introduction',
                'url' => 'https://www.youtube.com/embed/qikqmboVhig?si=sLxRCX-k7XrsiM8H',
            ],
            [
                'title' => 'JavaScript Introduction',
                'url' => 'https://www.youtube.com/embed/kuEQlHISkNI?si=67qq75d45LXqB99O',
            ],
            [
                'title' => 'JavaScript Introduction',
                'url' => 'https://www.youtube.com/embed/Krc0tbkjDBA?si=akCD06VH2rFBRwIL',
            ],
            [
                'title' => 'JavaScript Introduction',
                'url' => 'https://www.youtube.com/embed/aN2D1tRfBgY?si=BJiy9S9ZpbReg3eg',
            ],
            [
                'title' => 'JavaScript Introduction',
                'url' => 'https://www.youtube.com/embed/jdfTqXWbfYc?si=HpUlW7-EEfkHDa8b',
            ],
            [
                'title' => 'JavaScript Introduction',
                'url' => 'https://www.youtube.com/embed/36R6YVU3deY?si=CP0KHbZqK2bYV6op',
            ],
            [
                'title' => 'JavaScript Introduction',
                'url' => 'https://www.youtube.com/embed/1zR8ijNMsGg?si=T6jQ9pcpHGq-mqpF',
            ],
            [
                'title' => 'JavaScript Introduction',
                'url' => 'https://www.youtube.com/embed/rADTanITjtc?si=4V9SYUKYebSNka4g',
            ],
            [
                'title' => 'JavaScript Introduction',
                'url' => 'https://www.youtube.com/embed/1ZyeXC8mni0?si=DcOoxWFxDzFYlbw4',
            ],
            [
                'title' => 'JavaScript Introduction',
                'url' => 'https://www.youtube.com/embed/YTFd4Yt6pHI?si=ZNZDb8QnOvMn0pjy',
            ],
        ];

        foreach ($youtubeVideos as $video) {
            Video::create([
                'title' => $video['title'],
                'url' => $video['url'],
                'platform' => 'youtube',
            ]);
        }

        // Local video reels
        for ($i = 1; $i <= 20; $i++) {
            Video::create([
                'title' => 'CSS Reel',
                'file' => "videos/reel{$i}.mp4",
                'platform' => 'local',
            ]);
        }
    }
}

<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class BibleService
{
    public function getDailyVerse()
    {

        return [
            'verse' => 'João 3:16',
            'text' => 'Porque Deus amou o mundo de tal maneira que deu o seu Filho unigênito...',
        ];
    }
    
    public function fetchVerse($book, $chapter, $verse)
    {
        $url = "https://bible-api.com/{$book}+{$chapter}:{$verse}";
        $response = Http::get($url);
        return $response->json();
    }
}

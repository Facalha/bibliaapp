<?php

namespace App\Http\Controllers;

use App\Services\BibleService;

class BibleController extends Controller
{
    protected $bibleService;

    public function __construct(BibleService $bibleService)
    {
        $this->bibleService = $bibleService;
    }

    public function dailyVerse()
    {
        $verse = $this->bibleService->getDailyVerse();

        return response()->json($verse);
    }
}

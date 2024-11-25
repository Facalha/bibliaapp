<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\BibleService;

class FetchDailyVerse extends Command
{
    protected $signature = 'fetch:dailyverse';
    protected $description = 'Busca um versículo diário';

    public function handle()
    {
        $service = new BibleService();
        $verse = $service->fetchVerse('João', rand(1, 21), rand(1, 30)); // Exemplo
        cache()->put('daily_verse', $verse, now()->addDay());
        $this->info('Versículo diário atualizado.');
    }
}

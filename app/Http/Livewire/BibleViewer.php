<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Services\BibleService;

class BibleViewer extends Component
{
    public $book, $chapter, $verse, $text;

    public function loadVerse()
    {
        $service = new BibleService();
        $data = $service->fetchVerse($this->book, $this->chapter, $this->verse);
        $this->text = $data['text'] ?? 'Versículo não encontrado.';
    }

    public function render()
    {
        return view('livewire.bible-viewer');
    }
}

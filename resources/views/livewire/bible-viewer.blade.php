<div>
    <input wire:model="book" placeholder="Livro (ex: João)" />
    <input wire:model="chapter" placeholder="Capítulo" />
    <input wire:model="verse" placeholder="Versículo" />
    <button wire:click="loadVerse">Buscar</button>

    $verse = cache('daily_verse');

    @if($text)
        <p>{{ $text }}</p>
    @endif
</div>

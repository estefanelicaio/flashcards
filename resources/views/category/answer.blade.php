<x-app-layout>
    <div class="container py-10">
        <ul class="list-group mt-3">
            @empty($flashcards->toArray())
                <li class="list-group-item">{{ __('Nenhum flashcard encontrado!') }}</li>
            @else
                @foreach ($flashcards as $flashcard)
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">{{ $flashcard->front }}</p>
                            <button onclick="showBack(); this.remove();" type="button" class="btn btn-primary">Mostrar Verso</button>
                            <div id="div-flashcard-back" class="mb-3" style="display: none">
                                <hr/>
                                <p class="card-text">{{ $flashcard->back }}</p>
                            </div>
                            @if ($flashcards->hasMorePages())
                                <a id="link-next-flashcard" href="{{ $flashcards->nextPageUrl() }}" class="btn btn-primary" style="display: none">Avançar</a>
                            @else
                                <a id="link-next-flashcard" href="{{ route('category.index') }}" class="btn btn-success" style="display: none">Finalizar</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            @endempty
        </ul>
    </div>

    <script>
        function showBack() {
            const divFlashcardBack = document.getElementById('div-flashcard-back');
            divFlashcardBack.style.display = 'block';

            showLinkNextFlashcard()
        }

        function showLinkNextFlashcard() {
            const linkNextFlashcard = document.getElementById('link-next-flashcard');
            linkNextFlashcard.style.display = 'inline-block';
        }
    </script>
</x-app-layout>

<x-app-layout>
    <div class="container py-10">
        <a href="{{ route('category.create') }}" class="btn btn-secondary me-2">Criar Categoria</a>
        <a href="{{ route('flashcard.create') }}" class="btn btn-secondary">Criar Flashcard</a>

        <ul class="list-group mt-3">
            @empty($categories->toArray())
                <li class="list-group-item">{{ __('Nenhum flashcard encontrado!') }}</li>
            @else
                @foreach ($categories as $category)
                    <li class="list-group-item">
                        <a href="{{ route('category.answer', $category->id) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            @endempty
        </ul>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="container py-10">
        <a href="{{ route('category.create') }}">Nova categoria</a>

        <ul class="list-group mt-3">
            @empty($categories->toArray())
                <li class="list-group-item">{{ __('Nenhum flashcard encontrado!') }}</li>
            @else
                @foreach ($categories as $category)
                    <li class="list-group-item">{{ $category->name }}</li>
                @endforeach
            @endempty
        </ul>
    </div>
</x-app-layout>

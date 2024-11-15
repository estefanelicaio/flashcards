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
                        <div class="flex justify-content-between align-items-center">
                            <a href="{{ route('category.answer', $category->id) }}">{{ $category->name }}</a>
                            <button class="btn btn-danger btn-sm"
                                onclick="event.preventDefault(); document.getElementById('delete-category-{{ $category->id }}').submit();">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    </li>

                    <form id="delete-category-{{ $category->id }}" action="{{ route('category.destroy', $category) }}"
                        method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                @endforeach
            @endempty
        </ul>
    </div>
</x-app-layout>

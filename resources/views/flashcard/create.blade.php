<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('flashcard.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label">Categoria</label>
                            <select class="form-select" id="category" name="category_id">
                                <option selected value="" disabled>Selecione...</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="front" class="form-label">Frente</label>
                            <textarea type="text" class="form-control" id="front" name="front" rows="4"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="back" class="form-label">Verso</label>
                            <textarea type="text" class="form-control" id="back" name="back" rows="4"></textarea>
                        </div>

                        <a href="{{ url()->previous() }}" class="btn btn-secondary px-4 me-2">Voltar</a>
                        <button action="submit" class="btn btn-primary px-4">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

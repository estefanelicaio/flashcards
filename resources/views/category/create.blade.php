<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="mb-3 col-lg-6">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        
                        <a href="{{ url()->previous() }}" class="btn btn-secondary px-4 me-2">Voltar</a>
                        <button action="submit" class="btn btn-primary px-4">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-guest-layout>

    <div class="container-fluid bg-light text-center py-5">
        <h1 class="display-4">Aprenda com Flashcards</h1>
        <p class="lead">Resolva flashcards de qualquer tema e domine o conteúdo!</p>
        <div>
            <a href="{{ route('register') }}" class="btn btn-secondary btn-lg">Cadastrar-se</a>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Entrar</a>
        </div>
    </div>

</x-guest-layout>
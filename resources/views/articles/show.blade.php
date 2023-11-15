<x-guest-layout>
    <h1 class="font-bold text-xl mb-4">{{ $article->title }}</h1>
    <div class="mb-4 text-xs text-gray-500">
        {{ $article->published_at }}
    </div>
    <div>
        {!! \nl2br($article->body) !!}
    </div>
    <div>
        <a class="font-bold hover:text-emerald-600 transition" href="{{ route('articles.index') }}">Retour à la liste des articles</a>
    </div>
    <img class="flex-grow text-sm text-justify" src="{{ asset('storage/' . $article->img_path) }}">
    
</x-guest-layout>
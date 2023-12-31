<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <a class="flex flex-col h-full space-y-4 bg-white rounded-md shadow-md p-5 w-full hover:shadow-lg hover:scale-105 transition"
    href="{{ route('articles.show', $article) }}">
    <div class="uppercase font-bold text-gray-800">
        {{ $article->title }}
    </div>
    <div class="flex-grow text-gray-700 text-sm text-justify">
        {{ Str::limit($article->body, 120) }}
    </div>
    <img class="flex-grow text-sm text-justify" src="{{ asset('storage/' . $article->img_path) }}">


    <div class="text-xs text-gray-500">
        {{ $article->published_at }}
    </div>
</a>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top News</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container mx-auto mt-5">
    <h1 class="text-3xl font-bold mb-5">Top News Headlines</h1>

    @if (isset($articles) && count($articles) > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($articles as $article)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg">
                    <a href="{{ $article['url'] }}" target="_blank">
                        <img class="rounded-t-lg h-48 w-full object-cover" src="{{ $article['urlToImage'] ?? '/default-image.jpg' }}" alt="{{ $article['title'] }}">
                    </a>
                    <div class="p-5">
                        <h5 class="text-xl font-bold mb-2">
                            <a href="{{ $article['url'] }}" target="_blank" class="text-blue-500 hover:underline">{{ $article['title'] }}</a>
                        </h5>
                        <p class="text-gray-700 mb-4">{{ $article['description'] }}</p>
                        <a href="{{ $article['url'] }}" target="_blank" class="inline-block mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">
                            Read More
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-700">No news found.</p>
    @endif
</div>
</body>
</html>

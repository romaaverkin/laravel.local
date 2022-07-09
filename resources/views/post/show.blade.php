<x-layout>
    <x-slot:title>
        {{ $title }} - site.com
    </x-slot:title>
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <div>
                {{ $post->likes }}
            </div>
        </div>
    @endforeach
</x-layout>

<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <ul>
        @foreach($numbers as $key => $elem)
            <li>{{ $key + 1 }} {{ $elem }}</li>
        @endforeach
    </ul>
</x-layout>

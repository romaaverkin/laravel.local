<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <ul>
        @foreach($arr as $subArr)
            @continue($subArr == 0)
            <li>{{ $subArr }}</li>
        @endforeach
    </ul>

</x-layout>

<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    @foreach($arr as $subArr)
        @if($subArr == 0)
            @break
        @endif
        <p>{{ $subArr }}</p>
    @endforeach

</x-layout>

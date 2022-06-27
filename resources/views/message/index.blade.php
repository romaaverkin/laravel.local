<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    @for($i = 1; $i <= 10; $i++)
        <p>{{ $i }}</p>
    @endfor

</x-layout>

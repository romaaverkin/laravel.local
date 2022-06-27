<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    @if(is_array($data))
        <ul>
            @foreach($data as $elem)
                <li>{{ $elem }}</li>
            @endforeach
        </ul>
    @else
        <p>Число {{ $data }}</p>
    @endif
</x-layout>

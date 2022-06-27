<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <ul>
        @foreach($arr as $elem)
            @if($elem == $day)
                <li class="active">{{ $elem }}</li>
            @else
                <li>{{ $elem }}</li>
            @endif
        @endforeach
    </ul>

</x-layout>

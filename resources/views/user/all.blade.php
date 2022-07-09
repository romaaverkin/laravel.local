<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->id }} {{ $user->age }} {{$user->created_at}}</li>
        @endforeach
    </ul>
</x-layout>

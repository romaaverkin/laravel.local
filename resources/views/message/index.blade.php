<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <p class="{{ $main_class }}">{{ $name }}</p>
    <p>{{ $age }}</p>
    <p>{{ $salary }}</p>
</x-layout>

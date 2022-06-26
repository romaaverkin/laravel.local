<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <p class="{{ $main_class }}">{{ $name }}</p>
    <p>{{ $age }}</p>
    <p>{{ $salary }}</p>
    <input type="text" value="{{ $input1 }}">
    <input type="text" value="{{ $input2 }}">
    <input type="text" value="{{ $input3 }}">
    <p style="{{ $color_red }}">Текст красного цвета</p>
    <a href="{{ $href }}">{{ $text }}</a>
    <p>current timestamp: {{ date('d-m-Y') }}</p>
</x-layout>

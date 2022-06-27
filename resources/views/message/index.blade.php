<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

{{--    @if(!$age)--}}
{{--        <p>Вам нет 18 лет.</p>--}}
{{--    @endif--}}

    @unless($age == 18)
        <p>Вам нет 18 лет.</p>
    @endunless
</x-layout>

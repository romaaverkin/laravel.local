<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    @forelse($users as $user)
        <p>Пользователь {{ $user }}</p>
    @empty
        <p>в массиве нет элементов</p>
    @endforelse

</x-layout>

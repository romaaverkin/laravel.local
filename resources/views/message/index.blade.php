<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <p>Имя {{ $employee['name'] }}</p>
    <p>Возраст {{ $employee['age'] }}</p>
    <p>Зарплата {{ $employee['salary'] }}</p>
    <p>В массиве {{ count($my_array) }} элемента.</p>
</x-layout>

<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <ul>
        @foreach($employees as $employee)
            <li>{{ $employee['name'] }} {{ $employee['surname'] }} {{ $employee['salary'] }}</li>
        @endforeach
    </ul>

    <table border="1">
        <caption>Многомерный массив</caption>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Зарплата</th>
        </tr>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee['name'] }}</td>
                <td>{{ $employee['surname'] }}</td>
                <td>{{ $employee['salary'] }}</td>
            </tr>
        @endforeach
    </table>
</x-layout>

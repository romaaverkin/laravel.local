<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <table border="1">
        <tr>
            <th>Имя</th>
            <th>Адрес</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </table>
</x-layout>

<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Имя</th>
            <th>Users_id</th>
            <th>Возраст</th>
            <th>Зарплата</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->salary }}</td>
            </tr>
        @endforeach
    </table>
</x-layout>

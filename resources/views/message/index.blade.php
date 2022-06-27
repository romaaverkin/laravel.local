<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <table border="1">
        <caption>Двумерный массив</caption>
        <tr>
            <th>Первый массив</th>
            <th>Второй массив</th>
            <th>Третий массив</th>
        </tr>
        @foreach($arr as $subArr)
            <tr>
                @foreach($subArr as $elem)
                    <td>{{ $elem }}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
</x-layout>

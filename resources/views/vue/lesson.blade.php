<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div id="app">

        <p>@{{ obj['a'] + obj.b + obj['c'] }}</p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script>
        let app = new Vue({
            el: '#app',
            data: {
                obj: {a: 1, b: 2, c: 3},
            },
        })
    </script>
</x-layout>

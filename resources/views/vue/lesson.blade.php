<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div id="app">
        <button v-on:click="addItem">Добавить</button>
        <ul>
            <li v-for="item in items">@{{ item }}</li>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <script>
        let app = new Vue({
            el: '#app',
            data: {
                items: [5, 2, 0, -1, 15]
            },
            methods: {
                addItem: function () {
                    this.items = this.items.filter(function (elem) {
                        return elem > 0 && elem < 10
                    })
                }
            }
        });
    </script>

</x-layout>

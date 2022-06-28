<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div id="app">
        <ul>
            <template v-for="item in items">
                <li>@{{ item }}</li>
                <li class="devider"></li>
                <li class="my_class"></li>
            </template>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <script>
        let app = new Vue({
            el: '#app',
            data: {
                items: ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'],
            },
        })
    </script>

</x-layout>

<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div id="app">
        <button v-on:click="show">Нажми на меня</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <script>
        let app = new Vue({
            el: '#app',
            data: {
                num1: 1,
                num2: 2,
                num3: 3,
            },
            methods: {
                show: function () {
                    alert(this.num1 + this.num2 + this.num3)
                }
            }
        });
    </script>

</x-layout>

<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <div id="app">
        <p>@{{ text }}</p>
        <button v-on:click="changeText">Изменить буквы</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

    <script>
        let app = new Vue({
            el: '#app',
            data: {
                text: 'привет, роман'
            },
            methods: {
                upperCaseFirst: function () {
                    let first_char = this.text.charAt(0).toUpperCase() + this.text.slice(1)
                    this.text = first_char
                },
                upperCaseLast: function () {
                    let last_char = this.text.slice(0, -1) + this.text.charAt(this.text.length - 1).toUpperCase()
                    this.text = last_char
                },
                changeText: function () {
                    this.upperCaseFirst()
                    this.upperCaseLast()
                },
            }
        });
    </script>

</x-layout>

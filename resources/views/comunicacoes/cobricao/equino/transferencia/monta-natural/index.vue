<template>
    <div class="my-8">
        <div class="m-4 text-red-900">
            <nuxt-link @click="goBack">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </nuxt-link>
        </div>
        <div class="my-4">
            <h2 class="text-center font-medium text-xl">Cobrição</h2>
        </div>
        <div class="mb-4">
            <h1 class="text-center font-medium">Transferência de Embrião</h1>
        </div>
        <div class="w-60 mx-auto">
            <form action="">
                <div class="mb-4">
                    <label for="reprodutor">Reprodutor</label>
                    <input type="text" name="reprodutor" id="reprodutor"
                        class="w-full border bg-zinc-100 drop-shadow border-zinc-100 rounded-lg p-2 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                </div>
                <div class="mb-4">
                    <label for="doadora">Doadora</label>
                    <input type="text" name="doadora" id="doadora"
                        class="w-full border bg-zinc-100 drop-shadow border-zinc-100 rounded-lg p-2  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                </div>
                <div class="mb-4">
                    <label for="receptora">Receptora</label>
                    <input type="text" name="receptora" id="receptora"
                        class="w-full border bg-zinc-100 drop-shadow border-zinc-100 rounded-lg p-2 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                </div>
                <div class="mb-4">
                    <label for="data-cobricao">Data da Cobrição</label>
                    <input type="date" name="data-cobricao" id="data-cobricao"
                        class="w-full border bg-zinc-100 drop-shadow border-zinc-100 rounded-lg p-2 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                </div>
                <div class="mb-4">
                    <label for="data-transferencia">Data da Transferência</label>
                    <input type="date" name="data-transferencia" id="data-transferencia"
                        class="w-full border bg-zinc-100 drop-shadow border-zinc-100 rounded-lg p-2 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                </div>
                <div class="mb-4">
                    <label for="data-inseminacao">Data da Inseminação</label>
                    <input type="date" name="data-inseminacao" id="data-inseminacao"
                        class="w-full border bg-zinc-100 drop-shadow border-zinc-100 rounded-lg p-2 focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                </div>

                <button type="submit"
                    class="border border-red-900 rounded-lg p-2 bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">Protocolar</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "monta-natural",
    layout: "default",
    methods: {
        goBack() {
            this.$router.go(-1)
        }
    }
}
</script>
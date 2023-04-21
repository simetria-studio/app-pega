<template>
    <div class="my-8">
        <div class="m-4 text-red-900">
            <nuxt-link @click="goBack" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </nuxt-link>
        </div>
        <div class="mb-5">
            <h1 class="text-center text-xl font-medium">Cobrição</h1>
        </div>
        <div class="w-52 mx-auto ">
            <div class="flex mb-5">
                <input type="text"
                    class="text-center text-black placeholder:text-black bg-zinc-100 p-1 rounded drop-shadow border border-zinc-100 focus:ring-1 focus:ring-red-200 focus:outline-none  focus:border-red-900"
                    placeholder="Reprodutor">
            </div>
            <div class="flex mb-5">
                <input type="text"
                    class="text-center text-black placeholder:text-black bg-zinc-100 p-1 rounded drop-shadow border border-zinc-100 focus:ring-1 focus:ring-red-200 focus:outline-none  focus:border-red-900"
                    placeholder="Matriz">
            </div>
            <div class="flex   mb-5">
                <label for="date-cobricao">Data da cobrição
                    <br>
                    <input type="date" name="date-cobricao" id="date-cobricao"
                        class=" text-center text-black placeholder:text-black bg-zinc-100 p-1 rounded drop-shadow  border border-zinc-100 focus:ring-1 focus:ring-red-200 focus:outline-none focus:border-red-900 ">
                </label>
            </div>

            <div class="flex mb-5">
                <button
                    type="submit"
                    class="border border-red-900 bg-red-900 focus:outline-none focus:ring focus:ring-red-200 text-white p-2 rounded  w-24">Salvar
                </button>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    methods: {
        goBack() {
            this.$router.go(-1)
        }
    }
}
</script>
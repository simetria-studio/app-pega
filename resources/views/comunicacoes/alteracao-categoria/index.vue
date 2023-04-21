<template>
    <div class="my-8 ">
        <div class="m-4 text-red-900">
            <nuxt-link @click="goBack">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </nuxt-link>
        </div>
        <div class="grid place-items-center mx-8">
        <div class="mb-5">
            <h1 class="text-xl font-semibold">Alterar Categoria</h1>
        </div>
        <div>
            <div class="text-center">
                <p class="mb-5">Eu, <strong class="text-red-700">Nome de usuário,</strong> contribuinte desejo alterar
                    minha
                    categoria
                    para:</p>
            </div>

            <form action="">
                <div class="radio-container mb-8 flex justify-center">
                    <label for="radio">
                        <input type="radio" id="radio" name="radio" />
                        <div class="custom-radio">
                            <span></span>
                        </div>
                        <span class="font-semibold">Usuário</span>
                    </label>
                </div>
                <div class="flex justify-center">
                    <button
                        class="bg-red-900 hover:bg-red-800 active:bg-red-700 focus:outline-none focus:ring focus:ring-red-800 text-white p-2 rounded mx-2 w-24">Protocolar</button>
                </div>
            </form>

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
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
            <h2 class="text-center font-medium text-xl">Cobrição</h2>
        </div>

        <div class="mb-5">
            <h1 class="text-center text-2xl">
                Gestação Natural
            </h1>
        </div>
        <div class="mx-10 grid  grid-cols-2 grid-rows-3  gap-8 text-center text-white text-xs">
            <nuxt-link to="transferencia/monta-natural" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full">
                <img class="mx-auto my-2 w-16 h-16" src="~/assets/img/monta-natural.png" alt="">
                Monta Natural
            </nuxt-link>
            <nuxt-link to="transferencia/artificial" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full">
                <img class="mx-auto my-2 w-16 h-16" src="~/assets/img/gestacao.png" alt="">
                Inseminação artificial
            </nuxt-link>
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
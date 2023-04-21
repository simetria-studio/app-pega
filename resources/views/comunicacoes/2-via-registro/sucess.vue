<template>
    <div class="grid place-items-center my-8 h-80 w-full">
        <div>
            <div class="mb-3">
                <img src="~/assets/img/home.png" class="w-30 h-20 mx-auto" alt="">
            </div>
            <div class="mb-5 w-52">
                <p class="text-center text-xl">Tudo pronto segunda via solicitada!</p>
            </div>
            <div class="text-center mb-4">
                <nuxt-link to="/" class="text-red-900 font-semibold text-lg">Voltar a homepage</nuxt-link>
            </div>
            <div class="text-center mx-auto w-40">
                <button
                    class="bg-red-900 text-white rounded p-1 px-4 hover:bg-red-800 focus:outline-none focus:ring focus:ring-red-200 text-sm">Baixar
                    pdf da solicitação
                </button>
            </div>
        </div>
    </div>
</template>
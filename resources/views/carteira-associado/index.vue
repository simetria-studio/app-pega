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
        <div class="mx-2">
            <div class="relative mx-auto rounded-xl mb-5 ">
                <img src="~/assets/img/carteira.png" class="w-full h-full object-cover" alt="">
                <div class="absolute text-white text-sm font-bold bottom-4 right-8">
                    Nome do Usuario
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-5">
                <div class="mb-5 col-span-2">
                    <label>
                        Nome do associado
                        <input type="text" disabled
                            class="w-full rounded-2xl border p-1 border-black bg-zinc-100 shadow-sm drop-shadow focus:outline-none ">
                    </label>
                </div>
                <div class="mb-5 col-span-2">
                    <label>
                        Nome da fazenda
                        <input type="text" disabled
                            class="w-full rounded-2xl border p-1 border-black bg-zinc-100 shadow-sm drop-shadow focus:outline-none ">
                    </label>
                </div>
                <div class="mb-5 mx-auto">
                    <label>
                        N Cadastro <br>
                        <input type="text" disabled
                            class="w-full rounded-2xl border p-1 border-black bg-zinc-100 shadow-sm drop-shadow focus:outline-none ">
                    </label>
                </div>
                <div class="mb-5 mx-auto">
                    <label>
                        Afixo <br>
                        <input type="text" disabled
                            class="w-full rounded-2xl border p-1 border-black bg-zinc-100 shadow-sm drop-shadow focus:outline-none ">
                    </label>
                </div>
                <div class="mb-5 mx-auto">
                    <label>
                        UF
                        <input type="text" disabled
                            class="w-full rounded-2xl border p-1 border-black bg-zinc-100 shadow-sm drop-shadow focus:outline-none ">
                    </label>
                </div>
                <div class="mb-5 mx-auto">
                    <label>
                        Cidade
                        <input type="text" disabled
                            class="w-full rounded-2xl border p-1 border-black bg-zinc-100 shadow-sm drop-shadow focus:outline-none ">
                    </label>
                </div>
                <div class="mb-5 mx-auto">
                    <label>
                        Data de adesão
                        <input type="text" disabled
                            class="w-full rounded-2xl border p-1 border-black bg-zinc-100 shadow-sm drop-shadow focus:outline-none ">
                    </label>
                </div>
                <div class="mb-5 mx-auto">
                    <label>
                        Valido até
                        <input type="text" disabled
                            class="w-full rounded-2xl border p-1 border-black bg-zinc-100 shadow-sm drop-shadow focus:outline-none ">
                    </label>
                </div>
            </div>
            <div>
                <div class="grid grid-cols-3 place-items-center">
                    <div class="col-span-1">
                        <img src="~/assets/img/home.png" class="w-32 h-28" alt="">
                    </div>
                    <div class="col-span-2 text-xs">
                        <h1 class=" text-sm font-bold">Associação Brasileira dos criadores de jumento pêga</h1>
                        <p>Parque de Exposições Bolivar de Andrade Av. Amazonas, 6020, Belo Horizonte / MG</p>
                        <P>Cep. 30.510-000</P>
                        <p>Contato: (31) 3372-1223</p>
                        <p>E-mail: abcjpega@abcjpega.org.br</p>
                        <p>www.abcjpega.com.br</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Cookie from "js-cookie";
export default {
    methods: {
        goBack() {
            this.$router.go(-1)
        }
    },
    mounted() {
    const token = Cookie.get("_access_token");

    if (!token) {
      window.location.href = "/login";
    }
  }
}
</script>
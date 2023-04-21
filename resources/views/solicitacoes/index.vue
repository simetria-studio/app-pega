<template>
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ url()->previous() }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="text-center mb-5">
            <h1 class="text-xl font-bold">Solicitações</h1>
        </div>
        <div class="mx-8">


            <div class="border border-zinc-100 bg-zinc-100 rounded-xl drop-shadow shadow-sm mx-auto mb-5">
                <div class="text-center m-2">
                    <h1 class="text-normal text-red-800 font-semibold">Solicitação de cobrição</h1>
                </div>

                <div class="m-2">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="">Nome:</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium">Alisson Tiago Ezidio Galvão</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="">CEP:</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium">83310-210</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div>
                            <p>Endereço:</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium">Av.dos Eucaliptos, 600 piraquara PR</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div>
                            <p>Número:</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium">(41) 9 9105-1335</p>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <div>
                            <p>E-mail:</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium">tiago.ezidio99@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center m-3">
                    <button class="bg-red-800 text-white rounded-full px-4 py-2 text-sm font-semibold">
                        Saiba mais
                    </button>
                </div>
            </div>
            <div class="flex justify-center m-3">
                <button class="bg-red-800 text-white rounded-full px-4 py-2 text-sm font-semibold">
                   Enviar solicitação
                </button>
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

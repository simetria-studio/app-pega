<template>
    <div>
        <div class="text-center my-4">
            <h1 class="text-lg font-semibold">Escolher método de pagamento!</h1>
        </div>
        <div class="mx-4">
            <div class=" mb-3">
                <h2 class="text-red-900 font-medium text-sm text-center">Escanear QRcode para efetuar pagamento via Pix
                </h2>
            </div>

            <div class="qrcode flex justify-center ">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=00020101021126580014br.gov.bcb.pix2565www.pix.com.br/1234567890123456789012345678901234567890123456789012345678905204000053039865802BR5920Fulano%20de%20Tal6009Sao%20Paulo62070503***6304"
                    alt="QRcode">
            </div>
            <div class="text-center mt-3">
                <h2 class="text-red-900 font-medium text-sm">Ou se preferir</h2>
            </div>

            <div class="text-center mt-3 pix-copia-e-cola mb-8">
                <span class="text-red-900 font-medium text-sm">Copie e cole o código Pix abaixo</span>
                <br>
                <br>
                <label class="relative block w-72 mx-auto">
                    <input
                        class=" placeholder:text-slate-400 block bg-zinc-100 text-zinc-600 w-72 border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none  sm:text-sm mx-auto"
                        type="text" name="search" value="chavepix1561651" />
                    <span class="sr-only">Search</span>
                    <button
                        class="absolute inset-y-0 right-2 flex items-center pl-2 text-zinc-600 focus:outline-none focus:text-red-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.666 3.888A2.25 2.25 0 0013.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 01-.75.75H9a.75.75 0 01-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 01-2.25 2.25H6.75A2.25 2.25 0 014.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 011.927-.184" />
                        </svg>
                    </button>
                </label>
            </div>
            <div class="grid grid-cols-2 place-items-center">
                <div class="w-22 mb-3 flex items-center">
                    <input type="radio" id="boleto" name="pagamento"
                        class="w-5 h-5 rounded-full  border border-red-900 focus:text-red-900 focus:bg-red-900 appearance-none ">
                    <label for="boleto" class="text-lg pl-2 font-medium focus:text-red-900"> Boleto</label>
                </div>
                <div class="w-22 mb-3 flex items-center ">
                    <input type="radio" id="credito" name="pagamento"
                        class="w-5 h-5 rounded-full  border border-red-900 focus:text-red-900 focus:bg-red-900 appearance-none ">
                    <label for="credito" class="text-lg pl-2 font-medium"> Crédito</label>
                </div>
                <div class="w-22 mb-3 flex items-center ">
                    <input type="radio" id="pix" name="pagamento" checked
                        class="w-5 h-5 rounded-full  border border-red-900 focus:text-red-900 focus:bg-red-900 appearance-none ">
                    <label for="pix" class="text-lg pl-2 font-medium"> Pix</label>
                </div>
                <div class="w-22 mb-3 flex items-center ">
                    <input type="radio" id="debito" name="pagamento"
                        class="w-5 h-5 rounded-full  border border-red-900 focus:text-red-900 focus:bg-red-900 appearance-none ">
                    <label for="debito" class="text-lg pl-2 font-medium"> Débito</label>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Pendente',
    data() {
        return {
            pendente: []
        }
    },
    methods: {
        async get() {
            try {
                const response = await this.$axios.get('/financeiro/pendente')
                this.pendente = response.data
            } catch (error) {
                console.log(error)
            }
        }
    },
    mounted() {
        this.get()
    }
}
</script>
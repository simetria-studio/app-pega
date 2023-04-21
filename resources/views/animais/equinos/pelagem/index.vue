<template>
    <div class="my-8">
        <div class="m-4 text-red-900">
            <nuxt-link to="/animais/equinos">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </nuxt-link>
        </div>
        <div class="mx-4">
            <h1 class=" text-lg font-medium text-center">Solicitação de Inscrição de Registro de lã e pelagem</h1>
            <div class="w-80 mx-auto">
                <p class="my-3 text-center "> Caro Superintendente, conforme previsto no Regulamento do registro genealógico
                do jumento
                Pêga, especialmente no parágrafo único do seu Art. 28,
                solicito a inscrição do(s) animal(is), abaixo relacionado(s), a serem vistoriados para registro
                variedade de pelagem e em livro aberto,
                bem como envio, em anexo, relatório fotográfico do(s) referido(s) animal(is):
            </p>
            </div>

            <h1 class="text-2xl font-medium text-red-900 text-center">Relação dos animais:</h1>
            <div class="grid grid-cols-4">

                <div class="col-span-2 mb-3">
                    <div class="p-2">
                        <label for="nome_animal" class="font-medium text-zinc-600">Nome do animal</label>
                        <input type="text" id="nome_animal"
                            class="p-1 mt-1 bg-zinc-100 border border-zinc-100 drop-shadow text-center font-medium text-zinc-600 border-2  focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-red-800 w-full   rounded-md">
                    </div>
                </div>

                <div class="mb-3">
                    <div class="p-2">
                        <label for="idade_animal" class="font-medium text-zinc-600">Idade</label>
                        <input type="number" id="idade_animal" min="0" max="100"
                            class="p-1 mt-1 bg-zinc-100 border border-zinc-100 drop-shadow text-center font-medium text-zinc-600 border-2  focus:outline-none focus:ring-1 focus:ring-red-200 focus:border-red-800 w-full  rounded-md"
                            value="0">
                    </div>
                </div>

                <div class="mb-3">
                    <div class="p-2">
                        <label for="sexo_animal" class="font-medium text-zinc-600">Sexo</label>
                        <select name="" id="sexo_animal"
                            class="p-1 mt-1 bg-zinc-100 border border-zinc-100 drop-shadow text-center font-medium text-zinc-600 border-2 placeholder:text-zinc-600 placeholder:font-medium focus:outline-none focus:ring-1 focus:ring-red-300 focus:border-red-900 w-full shadow-sm sm:text-sm  rounded-md">
                            <option value="0">Macho</option>
                            <option value="1">Fêmea</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 col-span-2">
                    <div class="p-2">
                        <label for="pelagem_animal" class="font-medium text-zinc-600">Variedade de pelagem</label>
                        <input type="text" id="pelagem_animal"
                            class="p-1 mt-1 bg-zinc-100 border-zinc-100 drop-shadow text-center font-medium text-zinc-600 border-2 placeholder:text-zinc-600 placeholder:font-mediu2 focus:outline-none focus:ring-1 focus:ring-red-300 focus:border-red-900 w-full shadow-sm sm:text-sm  rounded-md">
                    </div>
                </div>

                <div class="mb-3 col-span-2">
                    <div class="p-2">
                        <label for="livro_aberto" class="font-medium text-zinc-600">Livro aberto</label>
                        <input type="text" id="livro_aberto"
                            class="p-1 mt-1 bg-zinc-100 border-zinc-100 drop-shadow text-center font-medium text-zinc-600 border-2 placeholder:text-zinc-600 placeholder:font-mediu2 focus:outline-none focus:ring-1 focus:ring-red-300 focus:border-red-900 w-full shadow-sm sm:text-sm  rounded-md">
                    </div>
                </div>
            </div>
            <div class="mx-4">

                <div class="flex justify-center gap-4 mb-4">
                    <div>
                        <img src="https://images.unsplash.com/photo-1611836920004-8b8b0b0b0b0b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                            alt="" class="w-20 h-20 ">
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1611836920004-8b8b0b0b0b0b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                            alt="" class="w-20 h-20">
                    </div>
                    <div>
                        <img src="https://images.unsplash.com/photo-1611836920004-8b8b0b0b0b0b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                            alt="" class="w-20 h-20">
                    </div>
                </div>
                <h1 class="text-center text-red-900">Anexar imagens do animal</h1>

                <div class="flex justify-center">
                    <div
                        class="flex flex-col items-center justify-center w-64 px-4 py-6 mt-5 text-center bg-white border-2 border-dashed rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        <div class="flex flex-col items-center justify-center">
                            <p class="mt-1 text-sm text-gray-600">
                                <label for="file-upload"
                                    class="relative font-medium text-red-900 cursor-pointer hover:text-red-900 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-red-500">
                                    <span>Carregar imagem</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                </label>
                            </p>
                            <p class="text-xs text-gray-500">
                                PNG ou JPG
                            </p>
                        </div>
                    </div>
                </div>



                <div class="flex justify-center mb-6">
                    <button
                        class="flex items-center justify-center px-4 py-2 mt-4 text-sm font-medium text-white bg-red-900 border border-transparent rounded-md hover:bg-red-800 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm0 2a10 10 0 100-20 10 10 0 000 20z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M10 3a1 1 0 00-1 1v6a1 1 0 002 0V4a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd" d="M10 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                        </svg>
                        Enviar
                    </button>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: "pelagem",
    layout: "default",
    methods: {},
};
</script>
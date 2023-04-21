<template>
    <div>
        <div class="mb-4">
            <h1 class="text-center text-xl">Selecionar médico veterinario</h1>
        </div>
        <div class="mb-4">
            <h1 class="text-center font-medium mb-4">Buscar por:</h1>
            <div class="w-60 mx-auto">
                <div class="radio-container mb-2">
                    <label for="fresco">
                        <input type="radio" id="fresco" name="material" />
                        <div class="custom-radio">
                            <span></span>
                        </div>
                        <span>Nome:</span>
                    </label>
                </div>
                <div class="radio-container mb-2">
                    <label for="resfriado">
                        <input type="radio" id="resfriado" name="material" />
                        <div class="custom-radio">
                            <span></span>
                        </div>
                        <span>Região</span>
                    </label>
                </div>
                <div class="radio-container mb-8">
                    <label for="congelado">
                        <input type="radio" id="congelado" name="material" />
                        <div class="custom-radio">
                            <span></span>
                        </div>
                        <span>CRMV</span>
                    </label>
                </div>
                <div class="relative flex flex-wrap justify-center mb-4">
                    <input
                        class="relative w-full bg-zinc-200 border border-zinc-200 rounded-xl py-1 px-4 focus:outline-none focus:ring-2 focus:ring-red-200 focus:border-red-900"
                        type="search" id="buscar-medico">
                    <label for="buscar-medico ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 absolute top-1 right-2 text-zinc-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </label>
                    <button type="button"
                        class="mt-4 border border-red-900 rounded-2xl p-1 px-4 bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">
                        Buscar
                    </button>
                </div>

                <div class="bg-zinc-200 h-52 w-full rounded-lg p-4 overflow-y-auto ">
                    <div class="border-b-2 border-red-900 py-1 ">
                        <div class="radio-container">
                            <label for="user_01" class="flex justify-between">
                                <input type="radio" id="user_01" name="veterinario" checked>
                                <div class="custom-radio">
                                    <span></span>
                                </div>
                                <span>
                                    <div>
                                        <h1 class="text-sm">Nome completo</h1>
                                    </div>
                                    <div>
                                        <h1 class="text-sm">CRMV</h1>
                                    </div>
                                    <div>
                                        <h1 class="text-sm">Endereço</h1>
                                    </div>
                                </span>

                            </label>
                        </div>
                    </div>
                    <div class="border-b-2 border-red-900 py-1 ">
                        <div class="radio-container">
                            <label for="user_02" class="flex justify-between">
                                <input type="radio" id="user_02" name="veterinario">
                                <div class="custom-radio">
                                    <span></span>
                                </div>
                                <span>
                                    <div>
                                        <h1 class="text-sm">Nome completo</h1>
                                    </div>
                                    <div>
                                        <h1 class="text-sm">CRMV</h1>
                                    </div>
                                    <div>
                                        <h1 class="text-sm">Endereço</h1>
                                    </div>
                                </span>

                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

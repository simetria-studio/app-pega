<template>
    <div class="m-8">
        <div class="text-center">
            <p class="font-semibold mb-3">Notas do veterinário sobre o animal:</p>
            <div class="mb-5">
                <textarea
                    class="w-full border border-zinc-200 bg-zinc-200 rounded-xl p-3 focus:outline-none focus:border-red-800"
                    name="notas_veterinario" id="" cols="30" rows="10" placeholder="Digite..."></textarea>
            </div>

            <p class="font-semibold mb-3">Genitais do animal:</p>


            <div class="radio-container mb-3">
                <label for="normal">
                    <input type="radio" id="normal" name="genitais" />
                    <div class="custom-radio">
                        <span></span>
                    </div>
                    <span>Estado Normal</span>
                </label>
            </div>
            <div class="radio-container mb-3">
                <label for="alterado">
                    <input type="radio" id="alterado" name="genitais" />
                    <div class="custom-radio">
                        <span></span>
                    </div>
                    <span>Apresenta alterações</span>
                </label>
            </div>

            <div>
                <p class="font-semibold mb-3">Anexar imagens do animal</p>
                <div class="grid grid-cols-3 gap-3  mb-5">
                    <div class="w-32 h-32 drop-shadow flex items-center justify-center">
                        <img src="" alt="" class="w-full h-full">
                    </div>
                    <div class="w-32 h-32 drop-shadow flex items-center justify-center">
                        <img src="" alt="" class="w-full h-full">
                    </div>
                    <div class="w-32 h-32 drop-shadow flex items-center justify-center">
                        <img src="" alt="" class="w-full h-full">
                    </div>
                </div>
            </div>
            <div class="flex justify-center mb-5">
                <label for="animal_frontal" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </label>
                <input type="file" class="hidden" name="animal_frontal" id="animal_frontal">
            </div>
        </div>
    </div>
</template>
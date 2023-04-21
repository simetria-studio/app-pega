<template>
    <div>
        <div class="mb-12">
            <h1 class="text-center text-2xl">Inseminação Artificial</h1>
        </div>
        <div class="mb-4">
            <h1 class="text-center text-xl">Selecionar o Material</h1>
        </div>
        <div class="w-60 mx-auto">
            <div class="radio-container mb-3">
                <label for="fresco">
                    <input type="radio" id="fresco" name="material" />
                    <div class="custom-radio">
                        <span></span>
                    </div>
                    <span>Sêmen Fresco</span>
                </label>
            </div>
            <div class="radio-container mb-3">
                <label for="resfriado">
                    <input type="radio" id="resfriado" name="material" />
                    <div class="custom-radio">
                        <span></span>
                    </div>
                    <span>Sêmen Resfriado</span>
                </label>
            </div>
            <div class="radio-container mb-8">
                <label for="congelado">
                    <input type="radio" id="congelado" name="material" />
                    <div class="custom-radio">
                        <span></span>
                    </div>
                    <span>Sêmen Congelado</span>
                </label>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "step1",
        layout: "default",
       
     
    }
</script>
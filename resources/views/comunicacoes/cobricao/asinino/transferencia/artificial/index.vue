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
        <form action="">
            <step-one v-if="currentStep === 1" />
            <step-two v-if="currentStep === 2" />
            <step-three v-if="currentStep === 3" />
            <div class="flex items-center justify-center space-x-3">
                <div v-if="currentStep > 1">
                    <button type="button" @click="prevStep"
                        class="border border-red-900 rounded-lg p-2 bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">Anterior</button>
                </div>
                <div v-if="currentStep < 3">
                    <button type="button" @click="nextStep"
                        class="border border-red-900 rounded-lg p-2 bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">Próximo</button>
                </div>
                <div v-if="currentStep === 3">
                    <button type="submit"
                        class="border border-red-900 rounded-lg p-2 bg-red-900 text-white hover:bg-red-800  focus:outline-none focus:border-red-900 focus:ring focus:ring-red-200">Enviar</button>
                </div>
            </div>
        </form>
    </div>

</template>
<script>
import stepOne from "./step-one.vue";
import stepTwo from "./step-two.vue";
import stepThree from "./step-three.vue";
export default {
    name: "transferencia-artificial",
    layout: "default",
    components: {
        stepOne,
        stepTwo,
        stepThree,
    },
    data() {
        return {
            currentStep: 1,
        };
    },
    methods: {
        goBack() {
            this.$router.go(-1);
        },
        nextStep() {
            this.currentStep++;
        },
        prevStep() {
            this.currentStep--;
        },
    },
}
</script>


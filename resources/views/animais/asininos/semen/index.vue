<template>
  <div class="my-8">
    <div class="m-4 text-red-900">
      <nuxt-link to="/animais/asininos">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-8 h-8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>
      </nuxt-link>
    </div>
    <div class="text-center my-8 text-2xl font-medium text-zinc-600">
      <h1>Inscrição de doador de sêmen</h1>
    </div>

    <form>
      <step-one v-if="currentStep === 1" />
      <step-two v-if="currentStep === 2" />
    </form>
    <div class="flex items-center justify-center space-x-3 mt-5">
      <div v-if="currentStep > 1">
        <button type="button"
          class="border border-red-900 bg-red-900 focus:outline-none  focus:ring-1 focus:ring-red-200 text-white p-2 rounded-xl drop-shadow"
          v-on:click="prevStep">
          Anterior
        </button>
      </div>

      <div v-if="currentStep < 2">
        <button type="button"
          class="border border-red-900 bg-red-900 focus:outline-none focus:ring-1 focus:ring-red-200 text-white p-2 rounded-xl drop-shadow"
          v-on:click="nextStep">
          Próximo
        </button>
      </div>

      <div v-if="currentStep === 2">
        <button type="submit"
          class="border border-red-900 bg-red-900 focus:outline-none focus:ring-1 focus:ring-red-200 text-white p-2 rounded-xl drop-shadow">
          Enviar
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import StepOne from "./step-one.vue";
import StepTwo from "./step-two.vue";

export default {
  components: {
    StepOne,
    StepTwo,
  },
  data() {
    return {
      currentStep: 1,
    };
  },
  methods: {
    nextStep() {
      this.currentStep++;
    },
    prevStep() {
      this.currentStep--;
    },
  },

};
</script>

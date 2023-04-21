<template>
  <div>
    <div class="text-center font-semibold my-8">
      <h1>Cadastrar Animal</h1>
    </div>


    <component 
    v-bind:is="steps[currentStep].component" 
    v-bind:formValue=formValue[steps[currentStep].label]
    />

    <div class="flex items-center justify-center space-x-3">
      
      <button
        v-if="currentStep !== 0"
        v-on:click="previous"
        class="text-md bg-red-900/80 hover:bg-red-900 focus:ring-2 focus:ring-red-900/50  text-white p-2 rounded-2xl drop-shadow-xl"
      >
       Anterior
      </button>

      <button
        v-if="currentStep < steps.length - 1"
        v-on:click="next"
        class="text-md bg-red-900/80 hover:bg-red-900 focus:ring-2 focus:ring-red-900/50  text-white p-2 rounded-2xl drop-shadow-xl"
      >
      Próximo
      </button>

      <button
        v-else
        class="text-md bg-red-900/80 hover:bg-red-900 focus:ring-2 focus:ring-red-900/50  text-white p-2 rounded-2xl drop-shadow-xl"
        v-on:click="submit"
      >
        Concluir
      </button>
    </div>
  </div>
</template>

<script>
import identidade from "./Steps/identidade.vue";
import reproducao from "./Steps/reproducao.vue";
import sobre from "./Steps/sobre.vue";
import foto from "./Steps/foto.vue";

export default {
  name: "cadastro",
  data() {
    return {
      currentStep: 0,
      formValue: {
        identidade: {},
        reproducao: {},
        sobre: {},
        foto: {},
      },
      steps: [
        {
          component: identidade,
        },
        {
          component: reproducao,
        },
        {
          component: sobre,
        },
        {
          component: foto,
        },
      ],
    };
  },
  methods: {
    next() {
      this.currentStep += 1;
    },
    previous() {
      this.currentStep -= 1;
    },
  },
  components: {
    identidade,
    reproducao,
    sobre,
    foto,
  },
};
</script>

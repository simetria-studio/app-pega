<template>
  <div class="my-8">
    <div class="m-4 text-red-900">
      <nuxt-link to="/pessoas">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="w-8 h-8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>
      </nuxt-link>
    </div>
    <nuxt-link to="/">
      <img src="~/assets/img/home.png" class="mx-auto w-32" alt="" />
    </nuxt-link>
    <div class="flex justify-center my-8 text-center text-lg font-medium ">
      <p>Veterinários e zootecnologos credenciados <strong class="text-red-900">ABCJPEGA</strong> </p>
    </div>
    <div class="mx-10 grid grid-cols-2 grid-rows-3 gap-8 text-center text-white text-xs">
      <Nuxt-Link to="/pessoas/veterinarios-zootecnologos/veterinarios"
        class="rounded-2xl border-red-400 bg-red-900 p-4 w-full h-full">
        <img class="mx-auto my-2 w-16 h-16" src="~/assets/img/doctor.png" alt="" />
        Veterinários
      </Nuxt-Link>
      <Nuxt-Link to="/pessoas/veterinarios-zootecnologos/zootecnistas"
        class="rounded-2xl border-red-400 bg-red-900 p-4 w-full h-full">
        <img class="mx-auto my-2 w-16 h-16" src="~/assets/img/doctor.png" alt="" />
        Zootecnistas
      </Nuxt-Link>
    </div>
  </div>
</template>

<script>
export default {
  name: "",
  layout: "default",
};
</script>

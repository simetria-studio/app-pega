<template>
  <div class="py-5">
    <div class="text-center font-normal text-sm">
      <p>Identificação do Animal</p>
    </div>
    <div class="text-center space-y-4 mt-3">
      <div>
        <input class="w-1/2 rounded-xl p-2 drop-shadow-xl shadow-xl shadow-black-300 placeholder:text-black border-2 border-[#d9d9d9]  focus:border-red-800  focus:outline-none" type="text" placeholder="ID do animal" />
      </div>
      <div>
        <input class="w-1/2 rounded-xl p-2 drop-shadow-xl shadow-xl shadow-black-300 placeholder:text-black border-2 border-[#d9d9d9]  focus:border-red-800 focus:outline-none" type="text" placeholder="Nome do animal" />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "identidade",
};
</script>

<template>
  <div class="py-5">
    <div class="text-center font-normal text-sm mb-3">
      <p>Dados de reprodução</p>
    </div>
    <div class="grid place-items-center space-y-4">
      <div class="relative w-1/2">
        <div
          class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-xl font-extrabold"
        >
          &male;
        </div>
        <input
          type="text"
          class="w-full rounded-xl border-2 border-gray-300 text-black shadow-xl shadow-black-300 placeholder:text-black border-2 border-[#d9d9d9] focus:border-red-800 focus:outline-none block  pr-10 p-2.5"
          placeholder="Genitor"
        />
      </div>

      <div class="relative w-1/2">
        <div
          class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-xl font-extrabold"
        >
          &female;
        </div>
        <input
          type="text"
          class="w-full rounded-xl border-2 border-gray-300 text-black shadow-xl shadow-black-300 placeholder:text-black border-2 border-[#d9d9d9] focus:border-red-800 focus:outline-none block  pr-10 p-2.5"
          placeholder="Genitor"
        />
      </div>


      <div class="w-1/2">
        <select
          class="w-full rounded-xl p-2 drop-shadow-xl shadow-xl shadow-black-300 placeholder:text-black border-2 border-[#d9d9d9] focus:border-red-800 focus:outline-none"
          name=""
          id=""
          aria-placeholder="Tipo de reprodução"
        >
          <option value="0">Tipo de reprodução</option>
          <option value="1">Opção 2</option>
          <option value="2">Opção 3</option>
        </select>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "reproducao",
};
</script>

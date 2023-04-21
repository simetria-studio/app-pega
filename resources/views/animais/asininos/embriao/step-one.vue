<template>
  <div class="my-8">
    <div class="text-center m-4 p-4 text-lg font-medium text-zinc-500">
      <p>
        Tendo em vista o nosso interesse em utilizar a inseminação artificial
        como método reprodutivo, em nossa propriedade, solicitamos a devida
        inscrição do reprodutor abaixo identificado, como doador de sêmen,
        conforme determina os Artigo 43 e 44 do Regulamento do SRG.
      </p>
      <p>
        Para tanto, na qualidade de propríetário, declaramos conhecer o
        regulamento do S.R.G e assumimos toda a responsabilidade pelas
        informações prestadas.
      </p>
    </div>
    <div class="flex justify-center mt-2">
      <div>
        <div class="mb-3">
          <input
            class="text-center text-gray-600 drop-shadow font-medium p-2 rounded-2xl bg-zinc-100 placeholder:text-gray-600 placeholder:font-medium focus:outline-none focus:border-1 focus:border-red-900 focus:ring-2 focus:ring-red-700"
            type="text"
            placeholder="Nome da matriz"
          />
        </div>
        <div class="mb-3">
          <input
            class="text-center text-gray-600 drop-shadow font-medium p-2 rounded-2xl bg-zinc-100 placeholder:text-gray-600 placeholder:font-medium focus:outline-none focus:border-1 focus:border-red-900 focus:ring-2 focus:ring-red-700"
            type="text"
            placeholder="Número do registro"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  layout: "default",
};
</script>

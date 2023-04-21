<template>
    <div class="m-8">
      <div class="titulo text-center mb-5">
        <h1 class="text-2xl font-medium text-zinc-600">Motivo</h1>
      </div>
      <div class="mx-10 w-80 my-10">
        <div class="radio-container mx-auto mb-5">
          <label>
            <input type="radio" name="motivo" />
            <div class="custom-radio">
              <span></span>
            </div>
            <span class="font-medium text-gray-900">Matriz de alto nível</span>
          </label>
        </div>
  
        <div class="radio-container mx-auto mb-5">
          <label>
            <input type="radio" name="motivo" />
            <div class="custom-radio">
              <span></span>
            </div>
            <span class="font-medium text-gray-900">
              Interesse para preservação da linhagem
            </span>
          </label>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    layout: "default",
  };
  </script>
  
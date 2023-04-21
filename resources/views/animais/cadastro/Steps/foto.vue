<template>
  <div class="my-8">
    <div class="text-center">
      Anexar imagens do animal <br />
      (opcional)
    </div>
    <div class="grid grid-cols-4 gap-4 max-w-sm mx-auto my-2">
      <div
        class="bg-[#d9d9d9] col-span-4 w-80 h-52 mx-auto grid place-items-center"
      >
        <form action="">
          <div>
            <label for="upload-image">
              <img
                class="cursor-pointer"
                src="~/assets/img/upload.png"
                alt=""
              />
            </label>
            <input
              class="hidden"
              type="file"
              name="upload-image"
              id="upload-image"
            />
          </div>
        </form>
      </div>
      <div class="bg-[#d9d9d9] w-20 h-20 grid place-items-center">
        <form action="">
          <div>
            <label for="upload-image-1">
              <img
                class="cursor-pointer"
                src="~/assets/img/upload.png"
                alt=""
              />
            </label>
            <input
              class="hidden"
              type="file"
              name="upload-image-1"
              id="upload-image-1"
            />
          </div>
        </form>
      </div>
      <div class="bg-[#d9d9d9] w-20 h-20 grid place-items-center">
        <form action="">
          <div>
            <label for="upload-image-2">
              <img
                class="cursor-pointer"
                src="~/assets/img/upload.png"
                alt=""
              />
            </label>
            <input
              class="hidden"
              type="file"
              name="upload-image-2"
              id="upload-image-2"
            />
          </div>
        </form>
      </div>
      <div class="bg-[#d9d9d9] w-20 h-20 grid place-items-center">
        <form action="">
          <div>
            <label for="upload-image-3">
              <img
                class="cursor-pointer"
                src="~/assets/img/upload.png"
                alt=""
              />
            </label>
            <input
              class="hidden"
              type="file"
              name="upload-image-3"
              id="upload-image-3"
            />
          </div>
        </form>
      </div>
      <div class="bg-[#d9d9d9] w-20 h-20 grid place-items-center">
        <form action="">
          <div>
            <label for="upload-image-4">
              <img
                class="cursor-pointer"
                src="~/assets/img/upload.png"
                alt=""
              />
            </label>
            <input
              class="hidden"
              type="file"
              name="upload-image-4"
              id="upload-image-4"
            />
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "foto",
};
</script>

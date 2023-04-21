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
        <div class="text-center mb-10">
            <h1 class="text-xl font-semibold">Informativos</h1>
        </div>
        <div class="mx-8">
            <div class="mb-5 border border-zinc-100 bg-zinc-100 rounded-xl drop-shadow shadow-sm  mx-auto ">
                <div class="text-center m-2 ">
                    <h1 class="text-red-800 text-lg font-semibold">Titulo da nota</h1>
                </div>
                <div class="flex items-center">
                    <div class="w-2/5  m-2">
                        <img src="~/assets/img/home.png" class="object-contain w-full h-full" alt="">
                    </div>
                    <div class="w-3/5 m-2">
                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repellendus
                            perferendis dolore aspernatur odio error maxime. Vel facilis quis possimus exercitationem,
                            odio,
                            provident pariatur dolore ipsam voluptatibus praesentium iure nam.</p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button class="bg-red-800 text-white rounded-full px-4 py-2 m-3">Ver mais</button>
                </div>
            </div>
            <div class="mb-5 border border-zinc-100 bg-zinc-100 rounded-xl drop-shadow shadow-sm  mx-auto ">
                <div class="text-center m-3 ">
                    <h1 class="text-red-800 text-lg font-semibold">Titulo da nota</h1>
                </div>
                <div class="flex items-center">
                    <div class="w-2/5  m-3">
                        <img src="~/assets/img/home.png" class="object-contain w-full h-full" alt="">

                    </div>
                    <div class="w-3/5 m-3">
                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est repellendus
                            perferendis dolore aspernatur odio error maxime. Vel facilis quis possimus exercitationem,
                            odio,
                            provident pariatur dolore ipsam voluptatibus praesentium iure nam.</p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button class="bg-red-800 text-white rounded-full px-4 py-2 m-3">Ver mais</button>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
import Cookie from "js-cookie";
export default {
    methods: {
        goBack() {
            this.$router.go(-1)
        }
    },
    mounted() {
    const token = Cookie.get("_access_token");

    if (!token) {
      window.location.href = "/login";
    }
  }
}
</script>
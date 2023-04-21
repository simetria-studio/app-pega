@extends('layouts.app')

@section('title', 'Resenha')

@section('content')
    <div class="my-8">
        <div class="m-4 text-red-900">
            <a href="{{ url()->previous() }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div>
            <h1 class="text-xl text-center font-semibold">Resenha</h1>
        </div>

        <form action="">
            <step-one v-if="currentStep === 1" />
            <step-two v-if="currentStep === 2" />
            <step-three v-if="currentStep === 3" />
            <step-four v-if="currentStep === 4" />
            <step-five v-if="currentStep === 5" />
            <step-six v-if="currentStep === 6" />
            <step-seven v-if="currentStep === 7" />
            <step-eight v-if="currentStep === 8" />

            <div class="flex justify-center">
                <div v-if="currentStep > 1">
                    <button type="button" class="border w-32 py-2 bg-red-800 text-white rounded-xl mx-2">Anterior</button>
                </div>
                <div v-if="currentStep < 8">
                    <button type="button" class="border w-32 py-2 bg-red-800 text-white rounded-xl mx-2">Próximo</button>
                </div>
                <div v-if="currentStep === 8">
                    <button type="submit" class="border w-32 py-2 bg-red-800 text-white rounded-xl mx-2">Enviar</button>
                </div>
            </div>
        </form>
    </div>
@endsection

{{-- <script>
    import stepOne from './step-one.vue'
    import stepTwo from './step-two.vue'
    import stepThree from './step-three.vue'
    import stepFour from './step-four.vue'
    import stepFive from './step-five.vue'
    import stepSix from './step-six.vue'
    import stepSeven from './step-seven.vue'
    import stepEight from './step-eight.vue'

    import Cookie from "js-cookie";

    export default {
        components: {
            stepOne,
            stepTwo,
            stepThree,
            stepFour,
            stepFive,
            stepSix,
            stepSeven,
            stepEight

        },
        data() {
            return {
                currentStep: 1
            }
        },
        methods: {
            nextStep() {
                this.currentStep++
            },
            prevStep() {
                this.currentStep--
            }
        },
        mounted() {
            const token = Cookie.get("_access_token");

            if (!token) {
                window.location.href = "/login";
            }
        }
    }
</script> --}}

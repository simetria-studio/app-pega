@extends('layouts.app')

@section('title')

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
        <div class="text-center text-2xl my-5 text-red-900 font-semibold">
            <h1>Equinos</h1>
        </div>

        <div class="mx-10 grid grid-cols-2 gap-8 grid-rows-2 text-center text-white text-sm">
            <a class="rounded-2xl border-red-900 bg-red-900 p-4 w-full " href="/animais/equinos/semen">
                <img class="mx-auto h-20" src="{{ asset('img/caval-semen.png') }}" alt="" />
                Inscrição para doador de sêmen
            </a>

            <a class="rounded-2xl border-red-900 bg-red-900 p-4 w-full" href="/animais/equinos/embriao">
                <img class="mx-auto h-20" src="{{ asset('img/caval-embriao.png') }}" alt="" />
                Inscrição para doadora de embrião
            </a>

            <a class="rounded-2xl border-red-900 bg-red-900 p-4 w-full" href="/animais/equinos/pelagem">
                <img class="mx-auto h-20" src="{{ asset('img/perga.png') }}" alt="" />
                Registro de lã e varidedade de pelagem
            </a>
        </div>
    </div>
@endsection

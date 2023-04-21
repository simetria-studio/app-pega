@extends('layouts.app')

@section('title', 'Pessoas')

@section('content')
    <div class="my-8 ">
        <div class="m-4 text-red-900">
            <a href="{{ url()->previous() }}" class="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </a>
        </div>
        <div class="mx-10 grid grid-cols-2 grid-rows-3 gap-8 text-center  text-white text-xs">
            <a href="/pessoas/veterinarios" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full  ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('img/doctor.png') }}" alt="" />
                Veterinários
            </a>
            <a href="/pessoas/zootecnistas" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full  ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('img/doctor.png') }}" alt="" />
                Zootecnistas
            </a>
            <a href="/pessoas/tecnicos" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('img/tecnico.png') }}" alt="" />
                Técnicos
            </a>
            <a href="/pessoas/criadores" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('img/criadores.png') }}" alt="" />
                Criadores
            </a>
            <a href="/pessoas/arbitros" class=" rounded-2xl border-red-400 bg-red-900 p-4 w-full">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('img/arbitro.svg') }}" alt="">
                Árbitros
            </a>
            <a href="/pessoas/parceiros" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('img/parceiros.png') }}" alt="" />
                Parceiros
            </a>
            <a href="/pessoas/meu-perfil" class="rounded-2xl border-red-400 bg-red-900 p-4 w-full ">
                <img class="mx-auto my-2 w-16 h-16" src="{{ asset('img/meu-perfil.png') }}" alt="" />
                Meu Perfil
            </a>
        </div>
    </div>
@endsection

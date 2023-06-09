<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABCJPêga - @yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
</head>

<body class="bg-gray-100">
    <header class=" bg-red-900 flex justify-between items-center p-3">
        {{--    <div id="sidemenu">
            <button class="sidemenu__btn bg-red-900" v-on:click="navOpen = !navOpen" v-bind:class="{ active: navOpen }">
                <span class="top"></span>
                <span class="mid"></span>
                <span class="bottom"></span>
            </button>
       <transition name="translateX">
                <nav v-show="navOpen">
                    <div class="sidemenu__wrapper bg-red-900">
                        <ul class="sidemenu__list">
                            <li class="sidemenu__item"><a href="/">Home</a></li>
                            <li class="sidemenu__item">
                                <a to="/pessoas/meu-perfil">Meu Perfil</a>
                            </li>
                            <li class="sidemenu__item">
                                <a to="/informativos">Informativos</a>
                            </li>
                            <li class="sidemenu__item">
                                <a to="/financeiro">Financeiro</a>
                            </li>
                            <li class="sidemenu__item">
                                <a to="/solicitacoes">Solicitações</a>
                            </li>
                            <li class="sidemenu__item">
                                <a to="/carteira-associado">Carteira Associado</a>
                            </li>
                            <li class="sidemenu__item"><a @click="logout">Sair</a></li>
                        </ul>
                    </div>
                </nav>
            </transition>
        </div> --}}

        <form class="flex items-center">
            <label for="simple-search" class="sr-only">Busca</label>
            <div class="relative w-full">
                <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-3 ">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <input type="text" id="simple-search"
                    class="w-full py-1 pr-10 pl- text-gray-700 bg-gray-200 rounded-lg focus:outline-none focus:bg-white focus:shadow"
                    placeholder="Busca">
            </div>
        </form>
        <div>
            <a to="/pessoas/meu-perfil" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </a>
        </div>
        <form action="">
            <a to="/login" class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
            </a>
        </form>
    </header>
    <main>
        @yield('content')
    </main>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    @yield('js')
</body>

</html>

@extends('layout')
@section('title', 'My Wishlist App')
@section('content')
<div class="home w-100 h-[80vh] bg-[url('../../public/img/bg/cadeau-noiretblanc.jpg')]"><!-- Image de fond -->
    <div class="searchbar w-100 h-[60px] flex justify-center items-center">
        <input id="input-searchbar" class="text-gray-50 bg-transparent w-[50%] p-[2px] invisible" type="search" placeholder="Rechercher une liste ...">
        <button id="research" class="w-[30px] h-[30px] invisible bg-[url('../../public/img/icons/search_icon.png')]"></button>
        <button id="search" class="w-[30px] h-[30px] bg-[url('../../public/img/icons/search_icon.png')]"></button>
    </div>
    <nav>
        <div class="menu-container w-full flex justify-end">
            <div id="menu" class="flex flex-row justify-center items-center w-fit mr-2 mt-2">
                <div class="hamburger flex flex-col justify-around w-fit h-[25px] mr-1">
                    <span class="cross-top w-[20px] h-[2px] bg-gray-50"></span>
                    <span class="middle w-[25px] h-[2px] bg-gray-50"></span>
                    <span class="cross-end w-[20px] h-[2px] bg-gray-50"></span>
                </div>
                <p class="uppercase text-2xl text-gray-50 cursor-pointer">menu</p>
            </div>
        </div>
        
        <div id="deroulant" class="welcomederoulant flex flex-col w-full bg-gray-50 invisible">
            <a class="uppercase font-medium text-center text-black hover:text-[#dac9bd] cursor-pointer">lien 1</a>
            <a href="{{ route('checkiflogin') }}" class="uppercase font-medium text-center text-black hover:text-[#dac9bd] cursor-pointer">tableau de bord</a>
            <a href="@if (auth()->guest())
                        {{ route('login') }}
                    @else
                        {{ route('logout') }}
                    @endif" class="uppercase font-medium text-center text-black hover:text-[#dac9bd] cursor-pointer">
                @if (auth()->guest())
                    {{ "se connecter" }}
                @else
                    {{ "se déconnecter" }}
                @endif
            </a>
        </div>
    </nav>
    <div class="welcome w-full h-[50vh] flex flex-col justify-center items-center">
        <h1 class="text-center text-7xl text-gray-50 leading-snug">Whish List Project</h1>
        <p class="text-center text-xl text-gray-50">Gardez l'effet de surprise !</p>
        <button class="uppercase bg-blue-900 rounded-3xl p-2 mt-2 text-xl text-blue-200 cursor-pointer hover:text-gray-50" onclick="window.location.href=('{{ route('registration') }}')">créer une liste</button>
    </div>
</div>

<main>
    <div class="flex flex-wrap justify-around w-full min-h-[100vh]">
        <span class="flex w-[250px] h-[350px] mt-[30px] m-[5px] rounded-[30px] shadow-xl"></span>
        <span class="flex w-[250px] h-[350px] mt-[30px] m-[5px] rounded-[30px] shadow-xl"></span>
        <span class="flex w-[250px] h-[350px] mt-[30px] m-[5px] rounded-[30px] shadow-xl"></span>
        <span class="flex w-[250px] h-[350px] mt-[30px] m-[5px] rounded-[30px] shadow-xl"></span>
    </div>
</main>

@vite('resources/js/app.js')
@vite('resources/js/menu_btn.js')
</body>
@endsection

<!-- Image par <a href="https://pixabay.com/fr/users/tookapic-1386459/?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=932764">tookapic</a> de <a href="https://pixabay.com/fr//?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=932764">Pixabay</a> -->
<header class="w-[100vw] h-[60px] bg-[#dac9bd] flex justify-center">
    <nav class="w-[90vw] h-[100%] flex justify-between ">
        <div>
            <h1 class="headertitle text-xl text-white mt-[15px] ">
                @yield('header-title')
            </h1>
        </div>
        <div class="navlinks-headerbladephp-container flex flex-col mt-[10px]">
            <div class="headermenu menu-container flex justify-end">
                <div id="menu" class="flex flex-row justify-center items-center w-fit mr-2 mt-2">
                    <div class="hamburger flex flex-col justify-around w-fit h-[25px] mr-1">
                        <span class="cross-top w-[20px] h-[2px] bg-gray-50"></span>
                        <span class="middle w-[25px] h-[2px] bg-gray-50"></span>
                        <span class="cross-end w-[20px] h-[2px] bg-gray-50"></span>
                    </div>
                    <p class="uppercase text-xl text-gray-50 cursor-pointer">menu</p>
                </div>
            </div>
            <ul id="deroulant" class="headerderoulant flex flex-col bg-[#b08e75] pr-[35px] invisible">
                <li class="text-white text-xl ml-[25px] hover:text-[#dac9bd]"><a href="{{ route('home') }}">Accueil</a></li>
                <li class="text-white text-xl ml-[25px] hover:text-[#dac9bd]"><a href="checkListsExists">Tableau de bord</a></li>
                <li class="text-white text-xl ml-[25px] hover:text-[#dac9bd]"><a href="#">Mon compte</a></li>
                <li class="text-white text-xl ml-[25px] hover:text-[#dac9bd]"><a href="logout">Se déconnecter</a></li>
            </ul>
        </div>
        
    </nav>
</header>

@vite('resources/js/menu_btn.js')
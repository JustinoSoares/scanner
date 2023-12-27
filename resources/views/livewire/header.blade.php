<div>
    <header class="flex justify-between mx-[5rem] items-center shadow-sm h-[3rem]">
        <h1 class="font-bold text-[1.5rem] text-[#774444]">.JS</h1>
        <nav class="h-full hidden md:block lg:block">
            <ul class="flex items-center h-full gap-4">
                <li class="h-full border-b-2 border-[#774444] flex items-center"><a href="#">Inicio</a></li>
                <li><a href="{{ url("#carregarImagem") }}">OCR</a></li>
                <li><a href="{{ url("#avaliar") }}">Sobre</a></li>
                <li><a href="{{ url("#footer") }}">Contribuir</a></li>
            </ul>
        </nav>
        <div class="hidden lg:block md:block">
            <img src="{{ asset("build/assets/svg/login.svg") }}" alt="">
        </div>
        <div wire:click='openMenu' class="lg:hidden md:hidden">
            <img class="w-8 h-8" src="{{ asset("build/assets/svg/menu.svg") }}" alt="">
        </div>
        <div class="fixed {{ $showMenu }} transition-[2s] -top-1 right-0  bg-white z-10 w-[100vw] h-[100vh]">
         <div class=" text-black bg-white w-full h-full ">
         <div class="relative top-1 border-b-2 border-[#774444]" wire:click='closeMenu'>
            <img class="w-10 h-10 cursor-pointer" src="{{ asset("build/assets/svg/close.svg") }}" alt="">
         </div>
         <nav class="left-1 relative top-1  mt-3  ">
            <ul class="flex flex-col h-full gap-4">
                <li><a class="text-lg font-light hover:underline" href="#">Inicio</a></li>
                <li ><a class="text-lg font-light hover:underline" href="#">OCR</a></li>
                <li><a class="text-lg font-light hover:underline" href="#">Sobre</a></li>
                <li><a class="text-lg font-light hover:underline" href="#">Ajuda</a></li>
            </ul>
        </nav>
         </div>
        </div>
    </header>
</div>

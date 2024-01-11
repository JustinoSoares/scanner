<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("build/assets/css/main.css") }}">
    {{-- CDN para o tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- main script --}}
    <script src="{{ asset("build/assets/js/main.js") }}"></script>

    <title>Scanner de Imagens</title>
</head>

<body>
    @livewire("header")
    {{-- Welcome --}}
    <section class="flex justify-center md:justify-center lg:justify-between mx-[5rem]  items-center mt-10">
        <div class="w-[40rem]">
            <h1 class="font-bold text-[#774444] text-center md:text-center lg:text-start   text-[1.8rem]">
                Exploração Visual Avançada: Desvende o Mundo com Nosso Escâner de Imagem Inovador!"
            </h1>
            <p class=" text-center md:text-center lg:text-justify text-lg">
                Bem-vindo ao <strong><i>Laravel OCR Assistant</i></strong> da  <strong>Morphosis</strong> , onde a revolução visual ganha vida! Nosso escâner de imagem de última
                geração está aqui para transformar a maneira como você interage com o mundo visual. Explore detalhes
                fascinantes, descubra nuances ocultas e mergulhe em um universo de imagens como nunca antes.
            </p>
        </div>
        <div class="hidden md:hidden lg:block">
            <img class="w-[30rem] h-[30rem]" src="{{ asset("build/assets/svg/ilustrar-scanner.svg") }}" alt="">
        </div>
    </section>
    @livewire("carregar-imagem")
    {{-- Resultado --}}
    <section class="mx-20">
        <ul class="flex gap-1 md:flex-col md:float-end lg:flex-col lg:float-end  items-center justify-center">
            <li class="p-2 " id="text-left">
                <img class=" w-6 h-6 cursor-pointer" src="{{ asset("build/assets/svg/justify-left.svg") }}" alt="">
            </li>
            <li class="p-2 "  id="text-justify">
                <img class="w-6 h-6 cursor-pointer" src="{{ asset("build/assets/svg/justify.svg") }}" alt="">
            </li>
            <li class="p-2 "  id="text-center">
                <img class="w-6 h-6 cursor-pointer" src="{{ asset("build/assets/svg/justify-center.svg") }}" alt="">
            </li>
            <li class="p-2 "  id="text-right">
                <img class="w-6 h-6 cursor-pointer" src="{{ asset("build/assets/svg/justify-right.svg") }}" alt="">
            </li>
        </ul>
      {{-- Mostrar o texto --}}
        <div id="texto" class="h-[20rem] p-3 text-black overflow-y-scroll bg-slate-100">
            <code>
                {{-- <pre> --}}
               @if(isset($texto))
               @foreach ($linhas as $linha )
                {{ $linha }}
               @endforeach
               @endif
                {{-- </pre> --}}
            </code>
        </div>
        @if(session('success'))
        <small class="text-green-700 ">
            {{ "Muito Bom!!" }}
        </small>
        @endif
        @if(isset($error))
        <small class="text-red-700 ">
            {{ $error }}
        </small>
        @endif

        {{-- Avaliações --}}
        <div id="avaliar" class="text-center mt-10">
            <h1 class="font-bold text-[15pt]">Avaliar o Programa</h1>
            <hr class="border-b-[2px] mt-2 w-4 mx-auto border-[#774444]" style="">
        </div>
        <div class="full-star">
            <ul class="flex items-center justify-center mt-5 gap-10">
                <li class="">
                    <img onclick="getStar(1)" class="star w-10 h-10 cursor-pointer" src="{{ asset("build/assets/svg/star.svg") }}" alt="">
                </li>
                <li>
                    <img onclick="getStar(2)" class="star w-10 h-10  cursor-pointer" src="{{ asset("build/assets/svg/star.svg") }}" alt="">
                </li>
                <li>
                    <img onclick="getStar(3)" class="star w-10 h-10  cursor-pointer" src="{{ asset("build/assets/svg/star.svg") }}" alt="">
                </li>
                <li>
                    <img onclick="getStar(4)" class="star w-10 h-10  cursor-pointer" src="{{ asset("build/assets/svg/star.svg") }}" alt="">
                </li>

                <li>
                    <img onclick="getStar(5)" class="star w-10 h-10  cursor-pointer" src="{{ asset("build/assets/svg/star.svg") }}" alt="">
                </li>


            </ul>
        </div>
    </section>
    {{-- About --}}
     <section>
        <div class="text-center mt-10">
            <h1 class="font-bold text-[15pt]">Sobre</h1>
            <hr class="border-b-[2px] mt-2 w-4 mx-auto border-[#774444]" style="">
        </div>
        <div class="flex flex-col gap-x-10 mx-3 md:flex-row lg:flex-row items-center justify-center gap-1 my-10">
            <div class="sobre1 w-[20rem]">
                <div class="flex justify-center md:justify-start lg:justify-start">
                    <img class="w-[4rem] h-[4rem]" src="{{ asset("build/assets/svg/chip-fill.svg") }}" alt="">
                </div>
                <div>
                    <h3 class="font-bold text-[16pt] text-center md:text-start lg:text-start ">Inteligência Artificial Avançada</h3>
                    <p class="text-center md:text-start lg:text-start  w-full">
                        Nossa tecnologia AI aprimorada automaticamente cada imagem, destacando detalhes sutis e
                        revelando a
                        verdadeira profundidade das suas capturas.
                    </p>

                </div>
            </div>

            <div class="sobre2 w-[20rem]">
                <div class="flex justify-center md:justify-start lg:justify-start">
                    <img class="w-[4rem] h-[4rem]" src="{{ asset("build/assets/svg/lampa.svg") }}" alt="">
                </div>
                <div class="text-center md:text-start lg:text-start ">
                    <h3 class="font-bold text-[16pt]">Ideias que Fluem Livremente:</h3>
                    <p class="text-center md:text-start lg:text-start  w-full">
                        As melhores ideias surgem quando são compartilhadas.Convidamos você a explorar e contribuir para
                        o
                        nosso
                        repositório, onde cada sugestão é uma oportunidade de crescimento.
                    </p>

                </div>
            </div>

            <div class="sobre3 w-[20rem]">
                <div class="flex justify-center md:justify-start lg:justify-start">
                    <img class="w-[4rem] h-[4rem]" src="{{ asset("build/assets/svg/ferramentas.svg") }}" alt="">
                </div>
                <div class="text-center md:text-start lg:text-start ">
                    <h3 class="font-bold text-[16pt]">Ferramentas Utilizadas</h3>
                    <p class="text-center md:text-start lg:text-start w-full">
                        Nosso projeto é impulsionado por tecnologias de ponta para garantir uma experiência excepcional.
                        <a href="#" class="text-red-700 underline">Laravel</a>,
                        <a class="text-pink-500 underline" href="#">Livewire </a>e <a href="#"
                            class="text-blue-500 underline">Tailwindcss</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
    @livewire("footer")
    @livewireScripts
</body>
<script>

let stars = document.querySelectorAll(".star");
function getStar(pos) {
   stars.forEach((star,index) => {
    if (index < pos) {
      star.src = "{{ asset("build/assets/svg/star-fill.svg") }}";
    }
  });
}

//Justificação do texto

 let text = document.querySelector("#texto");
let justify = document.querySelector("#text-justify");
let left = document.querySelector("#text-left");
let right = document.querySelector("#text-right");
let center = document.querySelector("#text-center");
// let textoPassado = "text-justify";
 let color = "bg-slate-200";
text.classList.add("text-justify");
justify.classList.add(color)
//Centralizar o texto
center.onclick = () =>{
    //Remove todas as outras formataões de texto
    text.classList.remove("text-justify");
    text.classList.remove("text-left");
    text.classList.remove("text-right");

     //Remove todas as outras formataões de background-color
     justify.classList.remove(color)
     left.classList.remove(color)
     right.classList.remove(color)

    text.classList.add("text-center");
    center.classList.add(color)
}

//Justicar o texto
justify.onclick = () =>{
    //Remove todas as outras formataões de texto
    text.classList.remove("text-center");
    text.classList.remove("text-left");
    text.classList.remove("text-justify");

     //Remove todas as outras formataões de background-color
     center.classList.remove(color)
     left.classList.remove(color)
     right.classList.remove(color)

    text.classList.add("text-justify");
    justify.classList.add(color)
}
//Para a esquerda
left.onclick = () =>{
    //Remove todas as outras formataões de texto
    text.classList.remove("text-center");
    text.classList.remove("text-right");
    text.classList.remove("text-justify");

     //Remove todas as outras formataões de background-color
     justify.classList.remove(color)
     center.classList.remove(color)
     right.classList.remove(color)

    text.classList.add("text-left");
    left.classList.add(color)
}
//Para a Direita
right.onclick = () =>{
    //Remove todas as outras formataões de texto
    text.classList.remove("text-center");
    text.classList.remove("text-left");
    text.classList.remove("text-justify");

     //Remove todas as outras formataões de background-color
     justify.classList.remove(color)
     center.classList.remove(color)
     left.classList.remove(color)

    text.classList.add("text-right");
    right.classList.add(color)
}


//Estrelas



</script>
</html>

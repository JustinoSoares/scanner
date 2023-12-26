<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("build/assets/css/main.css") }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Scanner de Imagens</title>
</head>

<body>
    @livewire("header")
    {{-- Welcome --}}
    <section class="flex justify-center md:justify-between lg:justify-between mx-[5rem]  items-center mt-10">
        <div class="w-[30rem]">
            <h1 class="font-[800] text-[#774444] text-center md:text-start lg:text-startj   text-[1.5rem]">
                Exploração Visual Avançada: Desvende o Mundo com Nosso Escâner de Imagem Inovador!"
            </h1>
            <p class=" text-center md:text-justify lg:text-justify text-sm">
                Bem-vindo ao <strong>Morphosis</strong> , onde a revolução visual ganha vida! Nosso escâner de imagem de última
                geração está aqui para transformar a maneira como você interage com o mundo visual. Explore detalhes
                fascinantes, descubra nuances ocultas e mergulhe em um universo de imagens como nunca antes.
            </p>
        </div>
        <div class="hidden md:block lg:block">
            <img class="w-[20rem] h-[20rem]" src="{{ asset("build/assets/svg/ilustrar-scanner.svg") }}" alt="">
        </div>

    </section>
    @livewire("carregar-imagem")
    {{-- About --}}
     <section>
        <div class="text-center mt-10">
            <h1 class="font-bold text-[15pt]">Sobre</h1>
            <hr class="border-b-[2px] mt-2 w-4 mx-auto border-[#774444]" style="">
        </div>
        <div class="flex flex-col md:flex-row lg:flex-row items-center justify-center gap-1 my-10">
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
</body>

</html>

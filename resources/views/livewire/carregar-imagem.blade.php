<div>
    {{-- Carregar imagem. --}}
    <section>
        <div class="text-center ">
            <h1 class="font-bold text-[15pt]">Carregar Imagem</h1>
            <hr class="border-b-[2px]  mt-2 w-4 mx-auto border-[#774444]" style="">
        </div>

        <main class="flex justify-center my-5 rounded-md">
            <div class="flex transition-[2s] hover:bg-slate-100 w-[30rem]  justify-center relative cursor-pointer">
                <input type="file"
                    class="absolute cursor-pointer top-[0%] opacity-0 w-[30rem] h-[27rem] right-[50%] translate-x-[50%]">
                <img class="w-[30rem] h-[30rem]" src="{{ asset("build/assets/svg/Image upload-bro.svg") }}" alt="">
            </div>
        </main>
    </section>


{{-- Justificar o texto --}}
    <section class="mx-20">
        <ul class="flex md:flex-col md:float-end lg:flex-col lg:float-end  items-center justify-center">
            <li class="p-2 ">
                <img class=" w-6 h-6 cursor-pointer" src="{{ asset("build/assets/svg/justify-left.svg") }}" alt="">
            </li>
            <li class="p-2 ">
                <img class="w-6 h-6 cursor-pointer" src="{{ asset("build/assets/svg/justify.svg") }}" alt="">
            </li>
            <li class="p-2 ">
                <img class="w-6 h-6 cursor-pointer" src="{{ asset("build/assets/svg/justify-center.svg") }}" alt="">
            </li>
            <li class="p-2 ">
                <img class="w-6 h-6 cursor-pointer" src="{{ asset("build/assets/svg/justify-right.svg") }}" alt="">
            </li>
        </ul>
        {{-- Mostrar o texto --}}
        <div class="h-[20rem] overflow-y-scroll bg-slate-100">
        </div>

        {{-- Avaliações --}}
        <div class="text-center mt-10">
            <h1 class="font-bold text-[15pt]">Avaliar o Programa</h1>
            <hr class="border-b-[2px] mt-2 w-4 mx-auto border-[#774444]" style="">
        </div>
        <div class="full-star">
            <ul class="flex items-center justify-center mt-5 gap-10">
                <li class="">
                    <img class="star w-10 h-10 cursor-pointer" src="{{ asset("build/assets/svg/star.svg") }}" alt="">
                </li>
                <li>
                    <img class="star w-10 h-10  cursor-pointer" src="{{ asset("build/assets/svg/star.svg") }}" alt="">
                </li>
                <li>
                    <img class="star w-10 h-10  cursor-pointer" src="{{ asset("build/assets/svg/star.svg") }}" alt="">
                </li>
                <li>
                    <img class="star w-10 h-10  cursor-pointer" src="{{ asset("build/assets/svg/star.svg") }}" alt="">
                </li>

                <li>
                    <img class="star w-10 h-10  cursor-pointer" src="{{ asset("build/assets/svg/star.svg") }}" alt="">
                </li>


            </ul>
        </div>
    </section>


</div>

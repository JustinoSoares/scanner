<div>
    {{-- Footer. --}}
    <footer id="footer" class="bg-slate-200 pb-8">
        <div
            class="Contribuir py-8 flex flex-col md:flex-row lg:flex-row justify-center md:justify-around lg:justify-around items-center">
            <div class="text-center  md:text-start lg:text-start">
                <small>Deixe a Sua Sugestão</small>
                <p class="font-bold text-[30pt]">
                    Contribuir
                </p>
            </div>
            <form class="w-[20rem]">
                <input class="w-full  p-2 rounded-lg outline-none placeholder:text-slate-600 " type="email"
                    placeholder="justinocsoares123@gmail.com">
                <textarea
                    class="border rounded-lg p-2 my-1 placeholder:text-slate-600  border-slate-300 outline-none w-full "
                    placeholder="Dê a sua sugestão de melhoria, aqui!!" id="" cols="20" rows="2"></textarea>
                <button class="float-end text-white rounded-sm font-bold" type="submit"><img class="w-7 h-7"
                        src="{{ asset("build/assets/svg/send.svg") }}" alt=""></button>
            </form>
        </div>

        <div
            class="flex pb-4 flex-col md:flex-row lg:flex-row justify-center md:justify-around lg:justify-around  border-t-[2px] border-t-[#774444] pt-4 ">
            {{-- Resumo do site --}}
            <div class="flex justify-center gap-4">
                <div>
                    <h4 class="font-bold text-[15pt]">Informações</h4>
                    <ul class="flex flex-col text-start h-full">
                        <li class="hover:underline"><a href="#">Inicio</a></li>
                        <li class="hover:underline"><a href="#">OCR</a></li>
                        <li class="hover:underline"><a href="#">Sobre</a></li>
                        <li class="hover:underline"><a href="#">Ajuda</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-[15pt]">Tecnologias</h4>
                    <ul class="flex flex-col text-start h-full">
                        <li class="hover:underline"><a class="text-red-700" href="#">Laravel</a></li>
                        <li class="hover:underline"><a class="text-pink-500" href="#">Livewire</a></li>
                        <li class="hover:underline"><a class="text-blue-700" href="#">Tailwindcss</a></li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-center">
                <div class=" text-center md:text-end lg:text-end">
                    <h4 class="font-bold text-[15pt]">Morphosis</h4>
                    <small>Copyright &copy;Todos os direitos reservados</small><br>
                    <small class="text-slate-600">Saiba mais sobre o programador</small><br>
                    <img src="{{ route("code") }}" class="w-[10rem] h-[8rem] mx-auto md:float-end lg:float-end" alt="">
                </div>
            </div>

    </footer>

</div>

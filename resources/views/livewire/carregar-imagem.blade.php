<div>
    {{-- Carregar imagem. --}}
    <section id="carregarImagem">
        <div class="text-center ">
            <h1 class="font-bold text-[15pt]">Carregar Imagem</h1>
            <hr class="border-b-[2px]  mt-2 w-4 mx-auto border-[#774444]" style="">
        </div>

        <form action="{{route("upload") }}#texto" method="post" enctype="multipart/form-data" class="flex justify-center my-5 rounded-md">
            @csrf
            <div class="flex transition-[2s] hover:bg-slate-100 w-[30rem]  justify-center relative cursor-pointer">
                <input name="imagem" type="file"
                       accept="image/*"
                       class="absolute cursor-pointer top-[0%]
                       opacity-0 w-[30rem] h-[27rem]
                       right-[50%] translate-x-[50%]"
                       id="input_file"
                       onchange="btn.click()"
                       >
                <img class="w-[30rem] h-[30rem]" src="{{ asset("build/assets/svg/Image upload-bro.svg") }}" alt="">
            </div>
            <button id="btn" type="submit"></button>
        </form>
    </section>
    {{-- @if ($photo)
    {{ $photo->temporaryUrl() }}
    @endif  --}}
    {{-- @if ($photo)

    <img src="{{ $photo->temporaryUrl() }}">
    @endif --}}
    {{-- Justificar o texto --}}
</div>

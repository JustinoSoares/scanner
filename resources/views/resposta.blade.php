<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CDN para o tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <title>LaravelOCR Assistent</title>
</head>
<style>
.div{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%)
}
</style>
<body >
@livewire("header")
   <div class="text-lg absolute top-[50%] left-[50%] -translate-x-[50%] -translate-y-[50%] p-10 bg-slate-300 my-auto rounded">
   Parece que ocorreu um erro com o tipo de arquivo que tentou carregar, tente outro!!
<br>
<br>
    <a class="bg-[#774444] text-white p-2 rounded-[5px]" href="{{ url("/#carregarImagem") }}">Voltar a página</a>
   </div>

</body>
</html>

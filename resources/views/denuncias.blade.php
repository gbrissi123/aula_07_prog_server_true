<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lixo Zero Web App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-purple-600 to-purple-400">
    <div class="flex flex-col justify-between">
        <div>
            <h1 class="px-5 text-white mt-10 text-lg">Lixo Zero</h1>
            <h2 class="px-5 text-white font-bold text-3xl">Bem-vindo, {{ auth()->user()->name }}.</h2>
            <hr class="border-purple-400 my-5">

            <div class="text-yellow-400 font-bold text-lg px-5">Suas últimas denúncias</div>

            <!-- Report -->
            <div class="flex flex-col space-y-5">
                @foreach($dados as $dado)
                <div class="px-5">
                    <div class="flex space-x-5 pt-5">
                        <img src="{{ $dado['caminho_foto'] }}" alt="Imagem de lixo" class="w-16 h-16 rounded-full ring ring-purple-400">
                        <div class="flex flex-col text-white text-sm">
                            <div class="font-bold text-cyan-300">{{ $dado['situacao'] }}</div>
                            <div>{{ $dado['endereco'] }}</div>
                            <a href="{{ route('deletarDenuncia', $dado['id']) }}" class="text-yellow-300 font-bold">Apagar denuncia</a>
                            <a href="{{ route('concluirDenuncia', $dado['id']) }}" class="text-sky-300 font-bold">Concluir denuncia</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Fim Report -->

            <div class="flex flex-col px-5 pt-10">
                <a href="nova-denuncia" class="bg-white py-4 w-full rounded text-purple-600 font-bold text-center">Fazer nova denúncia</a>
            </div>
        </div>
        <div class="text-center text-white py-10">Créditos do WebApp aqui</div>
    </div>
</body>

</html>
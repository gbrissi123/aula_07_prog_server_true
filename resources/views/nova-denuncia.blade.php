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
        <form action="" method="POST">
            <h1 class="px-5 text-white mt-10 text-lg">Lixo Zero</h1>
            <h2 class="px-5 text-white font-bold text-3xl">Nova denúncia</h2>
            <hr class="border-purple-400 my-5">

            <div class="flex flex-col space-y-5 px-5">
                <div class="flex flex-col space-y-1">
                    <div class="text-white font-bold">Endereço</div>
                    <div class="text-white text-sm">Qual o endereço de acúmulo de lixo?</div>
                    <input required name="endereco" class="ring ring-purple-400 border-0 p-3 bg-purple-700 text-white placeholder-purple-200 rounded outline-none" type="text" placeholder="Digite o endereço">
                </div>
            </div>

            <div class="flex flex-col px-5 pt-5">
                <button type="submit" class="bg-white py-4 w-full rounded text-purple-600 font-bold text-center">Fazer
                    nova denúncia</button>

                    <div class="text-center pt-5">
                        <a href="home.html" class="text-white">Voltar para a home</a>
                    </div>
            </div>
        </form>
        <div class="text-center text-white py-10">Créditos do WebApp aqui</div>
    </div>
</body>

</html>
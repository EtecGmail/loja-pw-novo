<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/criar-contato" method="post">
        @csrf
        <div>
            <input type="text" name="txNome" placeholder="Nome" />
        </div>

        <div>
            <input type="text" name="txEmail" placeholder="E-mail" />
        </div>
        <div>
            <input type="text" name="txAssunto" placeholder="Assunto" />
        </div>
        <div>
            <input type="text" name="txMensagem" placeholder="Mensagem" />
</body>

</html>
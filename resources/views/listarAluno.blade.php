<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <h1>Listar Alunos</h1>
        <form method="post" action="{{route('aluno.update')}}">
            @csrf

            <div>
                <label for="id">ID:</label>
                <input type="text" name="id" value="{{$aluno->id}}">
            </div>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="{{$aluno->nome}}" required>
            </div>

            <div>
                <label for="data_nascimento">Data de nascimento:</label>
                <input type="date" name="data_nascimento" value="{{$aluno->data_nascimento}}" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{$aluno->email}}" required>
            </div>

            <div>
                <label for="curso">Curso:</label>
                <input type="text" name="curso" value="{{$aluno->curso}}" required>
            </div>

            <div>
                <button type="submit">Atualizar Aluno</button>
            </div>
        </form>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Alunos</h1>
        @error('erro')
            <div>{{ $message }}</div>
        @enderror
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
            <tr>
                <td> {{ $aluno->id }} </td>
                <td> {{ $aluno->nome }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
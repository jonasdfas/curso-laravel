<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuários</title>
</head>
<body>
<h1>Usuários</h1>
<table id="tableUsers" class="display">
    <thead>
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>action</td>
            </tr>
        @empty
            <tr>
                <td colspan="100">Nenhum usuário encontrado</td>
            </tr>
        @endforelse


    </tbody>


</table>


</body>
</html>

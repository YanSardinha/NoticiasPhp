<body class="text-center">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<main class="form-signin w-100 m-auto">
<form action="?page=salvar" method="POST">
    <input type="hidden" name='acao' value="cadastrar">
    <div class='form-floating'>
        <input type="text" name='user' class="form-control" id="floatingInput">
        <label for="floatingInput">Usuário</label>
    </div>
    <div class='form-floating'>
        <input type="email" name='email' class="form-control" id="floatingInput">
        <label for="floatingInput">Email address</label>
    </div>
    <div class='form-floating'>
        <input type="password" name='pass' class="form-control" id="floatingInput">
        <label for="floatingInput">Senha</label>
    </div>
    <div class='mb-3'>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
</main>
</body>
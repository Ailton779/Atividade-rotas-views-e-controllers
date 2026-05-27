<!DOCTYPE html>
<html>
<head><title>Cadastro de Aluno</title></head>
<body>
    <h1>Cadastro de Aluno</h1>
    <form method="POST" action="/alunos">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

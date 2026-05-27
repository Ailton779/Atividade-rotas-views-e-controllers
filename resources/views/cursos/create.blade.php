<!DOCTYPE html>
<html>
<head><title>Cadastro de Curso</title></head>
<body>
    <h1>Cadastro de Curso</h1>
    <form method="POST" action="/cursos">
        @csrf
        <label>Nome do curso:</label>
        <input type="text" name="nome">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head><title>Novo Produto</title></head>
<body>
    <h1>Cadastrar Produto</h1>
    <form method="POST" action="/produtos">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>

# Atividade — Controllers no Laravel

Atividade prática da disciplina de Programação Web I (IFCE — Campus Boa Viagem) sobre criação e uso de Controllers no Laravel.

## Exercícios realizados

### Exercício 1 — Controller simples
Criação do `CursoController` com o método `index` retornando a mensagem "Lista de cursos".
- Rota: `GET /cursos`

### Exercício 2 — Controller retornando View
Método `create` no `CursoController` retornando a view `cursos.create` com o título "Cadastro de Curso".
- Rota: `GET /cursos/novo`

### Exercício 3 — Envio de dados para a View
Método `listagem` enviando um array de cursos para a view `cursos.listagem`, exibida com `@foreach`.
- Rota: `GET /cursos/lista`

### Exercício 4 — Controller com parâmetro
Método `show($id)` recebendo um parâmetro dinâmico via rota e exibindo "Curso selecionado: ID X".
- Rota: `GET /cursos/{id}`

### Exercício 5 — Formulário e Request
Formulário Blade com campo nome enviando dados via POST para o método `store`, que retorna "Curso cadastrado: [nome]".
- Rotas: `GET /cursos/novo` e `POST /cursos`

### Exercício 6 — Resource Controller (CRUD)
Criação do `AlunoController` como resource com os métodos `index`, `create`, `store` e `show`.
- Rotas geradas automaticamente via `Route::resource`

### Exercício 7 — Desafio prático
Criação do `DisciplinaController` com métodos para listar, cadastrar e visualizar disciplinas, com views organizadas na pasta `disciplinas`.
- Rotas: `GET /disciplinas`, `GET /disciplinas/novo`, `GET /disciplinas/{id}`

### Atividade Final — Fluxo create → store
Criação do `ProdutoController` com o fluxo completo de formulário GET para processamento POST.
- Rotas: `GET /produtos/create` e `POST /produtos`

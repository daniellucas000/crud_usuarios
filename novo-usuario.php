<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>
    </div>

    <div>
        <label for="data_nasc">Data de Nascimento</label>
        <input type="date" name="data_nasc" id="data_nasc" required>
    </div>
    <button type="submit">Enviar</button>
</form>
<h1>Editar Usuário</h1>
<?php
$sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php print $row->nome; ?>">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php print $row->email; ?>">
    </div>

    <div>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>
    </div>

    <div>
        <label for="data_nasc">Data de Nascimento</label>
        <input type="date" name="data_nasc" id="data_nasc" value="<?php print $row->data_nasc; ?>">
    </div>
    <button type="submit">Enviar</button>
</form>
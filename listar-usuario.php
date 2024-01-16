<h1>Listar Usuários</h1>

<?php
$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Email</th>";
    print "<th>Data Nascimento</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>$row->id</td>";
        print "<td>$row->nome</td>";
        print "<td>$row->email </td>";
        print "<td>$row->data_nasc</td>";

        print "<td>
                <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\">Editar</button>
                <button onclick=\"if(confirm('tem certeza que deseja excluir?')){
                    location.href='?page=salvar&acao=excluir&id=" . $row->id . "';
                }else{false;}\">Excluir</button>
                </td>";

        print "</tr>";
    }
    print "</table>";
} else {
    print "<p>Não encontrou resultados!</p>";
}
?>
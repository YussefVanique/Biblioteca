<h1>Listar Usuário</h1>


<?php

$sql = "SELECT * FROM aluno";

$res = $conn->query($sql) or die ($conn->error);

$qtd = $res->num_rows;

echo "<p>Encontrou <b>$qtd</b> resultados(s)</p>";


if($qtd>0) {
 print "<table class = 'table table-striped table-hover table-bordered'>";
print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Email</th>";
    print "<th>Telefone</th>";
    print "<th>RGM</th>";
    print "<th>Nascimento</th>";
    print "<th>Genero</th>";
    print "<th>Endereço</th>";
    print "<th>Ações</th>";
print "<tr>";

    while($row = $res->fetch_object()) {

print "<tr>";
    print "<td>$row->idaluno</td>";
    print "<td>$row->nome_aluno</td>";
    print "<td>$row->email_aluno</td>";
    print "<td>$row->fone_aluno</td>";
    print "<td>$row->rgm_aluno</td>";
    print "<td>".ExibeData($row->data_nasc_aluno)."</td>";
    print "<td>$row->genero_aluno</td>";
    print "<td>$row->end_aluno</td>";
    print "<td> <button class = 'btn btn-success' onclick=\"location.href='?page=usuario-editar&idaluno=".$row->idaluno."';\">Editar </button>
                <button class = 'btn btn-dark' onclick=\"location.href='?page=usuario-salvar&acao2=excluir&idaluno=".$row->idaluno."';\">Deletar </button>
           </td>";
print "<tr>";

    }

} else {
    print "<div class='alert alert-danger'>Não encontrou resultados.</div>";
}

?>
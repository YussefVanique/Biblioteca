<h1>Listar Reserva</h1>
<?php
 //PRIMEIRA CHAVE
	$sql = "SELECT * FROM reserva AS a
			INNER JOIN aluno AS b
			ON b.idaluno = a.aluno_idaluno

            INNER JOIN livro AS d
			ON d.id_livro = a.livro_id_livro

            INNER JOIN atendente AS f
			ON f.id_atendente = a.atendente_id_atendente";
            
            
            

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

    

 /*SEGUNDA CHAVE   

    $sql = "SELECT * FROM reserva AS c
			INNER JOIN livro AS d
			ON d.id_livro = c.livro_id_livro";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;



// TERCEIRA CHAVE
    $sql = "SELECT * FROM reserva AS e
			INNER JOIN atendente AS f
			ON f.id_atendente = e.atendente_id_atendente";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";*/

	if($qtd > 0){
		print "<table class='table table-striped table-hover table-bordered'>";
		print "<tr>";
		print "<th>Aluno</th>";
		print "<th>Livro</th>";
		print "<th>Atendente</th>";
        print "<th>Empréstimo</th>";
        print "<th>Devolução</th>";
        print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->nome_aluno."</td>";
			print "<td>".$row->titulo_livro."</td>";
			print "<td>".$row->nome_atendente."</td>";
            print "<td>".ExibeData($row->data_emprestimo)."</td>";
            print "<td>".ExibeData($row->data_devolucao)."</td>";
			print "<td>
						<button class='btn btn-success' onclick=\"location.href='?page=reserva-editar&id_reserva=".$row->id_reserva."';\">Editar</button>

						<button class='btn btn-dark' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=reserva-salvar&acao=excluir&id_reserva=".$row->id_reserva."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-dark'>Não há resultados</div>"; }
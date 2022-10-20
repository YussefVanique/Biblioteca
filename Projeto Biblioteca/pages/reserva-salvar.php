<?php

    switch($_REQUEST['acao']) {
        case 'cadastrar':

            $aluno = $_POST['aluno_idaluno'];
            $livro = $_POST['livro_id_livro'];
            $atendente = $_POST['atendente_id_atendente'];
            $dataEmprestimo = $_POST['data_emprestimo'];
            $dataDevolucao = $_POST['data_devolucao'];

            $sql = "INSERT INTO reserva (aluno_idaluno, livro_id_livro, atendente_id_atendente, data_emprestimo, data_devolucao)
            VALUES ('{$aluno}','{$livro}','{$atendente}','{$dataEmprestimo}','{$dataDevolucao}')";

            $res = $conn->query($sql) or die ($conn->error);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=reserva-listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=reserva-listar';</script>";
            }
            break;

        case 'editar':
            $aluno = $_POST['aluno_idaluno'];
            $livro = $_POST['livro_id_livro'];
            $atendente = $_POST['atendente_id_atendente'];
            $dataEmprestimo = $_POST['data_emprestimo'];
            $dataDevolucao = $_POST['data_devolucao'];

            $sql= "UPDATE reserva SET
                data_emprestimo = '{$dataEmprestimo}',
                data_devolucao  = '{$dataDevolucao}'
                        WHERE id_reserva = ".$_POST['id_reserva'];

			$res= $conn->query($sql) or die($conn->error);
            
			if($res==true){
			    print "<script>alert('Editado com sucesso');</script>";
			    print "<script>location.href='?page=reserva-listar';</script>";
			}else{
			    print "<script>alert('Não foi possível editar');</script>";
			    print "<script>location.href='?page=reserva-listar';</script>";
			}
			break; 
  
    	case 'excluir':
        	$sql = "DELETE FROM reserva 
        	WHERE id_reserva=".$_REQUEST["id_reserva"];

		    $res = $conn->query($sql) or die($conn->error);

		    if($res==true){
		    print "<script>alert('Excluído com sucesso!');</script>";
		    print "<script>location.href='?page=reserva-listar';</script>";
		   	}else{
		    print "<script>alert('Não foi possível excluir!');</script>";
		    print "<script>location.href='?page=reserva-listar';</script>";
		  	}
			break;             

    }


?>
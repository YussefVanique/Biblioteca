<?php 

switch(@$_REQUEST['acao2']) {
    case 'listar':
        $nome = $_POST['nome_aluno'];
        $email = $_POST['email_aluno'];
        $fone = $_POST['fone_aluno'];
        $rgm = $_POST['rgm_aluno'];
        $dataNascimento = $_POST['data_nasc_aluno'];
        $genero = $_POST['genero_aluno'];
        $endereco = $_POST['end_aluno'];

        $sql = "INSERT INTO aluno (nome_aluno, email_aluno, fone_aluno, rgm_aluno, data_nasc_aluno, 
          genero_aluno, end_aluno)  VALUES ('{$nome}', '{$email}', '{$fone}', '{$rgm}',
           '{$dataNascimento}', '{$genero}', '{$endereco}')";

          $res = $conn->query($sql) or die ($conn->error);

            if($res==true) {

                echo "<script>alert('Aluno cadastrado'); </script>";
                echo "<script>location.href='?page=usuario-listar'; </script>";
                
            } else {
                echo "<script>alert('Não foi possível realizar o cadastro'); </script>";
                echo "<script>location.href='?page=usuario-listar'; </script>";

            }


        break;

        case 'editar':
        $nome = $_POST['nome_aluno'];
        $email = $_POST['email_aluno'];
        $fone = $_POST['fone_aluno'];
        $rgm = $_POST['rgm_aluno'];
        $dataNascimento = $_POST['data_nasc_aluno'];
        $genero = $_POST['genero_aluno'];
        $endereco = $_POST['end_aluno'];

        $sql = "UPDATE aluno SET 
        nome_aluno='{$nome}',
        email_aluno='{$email}',
        fone_aluno='{$fone}',
        rgm_aluno='{$rgm}',
        data_nasc_aluno='{$dataNascimento}',
        genero_aluno='{$genero}',
        end_aluno='{$endereco}'
        
            WHERE idaluno=".$_POST["idaluno"];

            $res = $conn->query($sql) or die($conn->error);

            if($res==true) {
                echo "<script>alert('Editado com sucesso'); </script>";
                echo "<script>location.href='?page=usuario-listar'; </script>";

            } else {
                echo "<script>alert('Não foi possível editar'); </script>";
                echo "<script>location.href='?page=usuario-listar'; </script>";
            }


            break;

        case 'excluir': 

            $sql = "DELETE FROM aluno WHERE idaluno = ".$_REQUEST['idaluno'];

            $res = $conn->query($sql) or die ($conn->error);

            if($res==true) {
                echo "<script>alert('Excluido com sucesso'); </script>";
                echo "<script>location.href='?page=usuario-listar'; </script>";

            } else {
                echo "<script>alert('Não foi possível excluir'); </script>";
                echo "<script>location.href='?page=usuario-listar'; </script>";
            }

            

}




?>
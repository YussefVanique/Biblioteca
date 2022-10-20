<?php
 switch ($_REQUEST['acao']) {
     case 'cadastrar':
        $nome = $_POST['nome_categoria'];

        $sql = "INSERT INTO categoria (nome_categoria) VALUES ('{$nome}')";

        $res = $conn->query($sql) or die($conn->error);

        if($res==true) {
            print "<script>alert('Categoria cadastrada!');</script>";	
            print "<script>location.href='?page=categoria-listar';</script>";
			}else{
			print "<script>alert('Não foi possível cadastrar!');</script>";
			print "<script>location.href='?page=categoria-listar';</script>";
			}
            break;

    case 'editar':
        $nome = $_POST['nome_categoria'];

        $sql = "UPDATE categoria SET
                        nome_categoria='{$nome}' WHERE id_categoria =" .$_POST['id_categoria'];

                        $res = $conn->query($sql) or die ($conn->error);

                        if($res==true){
                            print "<script>alert('Editado com sucesso!');</script>";
                            print "<script>location.href='?page=categoria-listar';</script>";
                        }else{
                            print "<script>alert('Não foi possível editar!');</script>";
                            print "<script>location.href='?page=categoria-listar';</script>";
                        }
            
                        break;

        case 'excluir': 

            $sql = "DELETE FROM categoria WHERE id_categoria = ".$_REQUEST['id_categoria'];

            $res = $conn->query($sql) or die ($conn->error);

            if($res==true) {
                echo "<script>alert('Excluida com sucesso'); </script>";
                echo "<script>location.href='?page=categoria-listar'; </script>";

            } else {
                echo "<script>alert('Não foi possível excluir a categoria!'); </script>";
                echo "<script>location.href='?page=categoria-listar'; </script>";
            }                           
 }

?>
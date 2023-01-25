<!--aqui vamos recuperar os dados enviado atraves submit do formulario e criar agora os metodos de cadastrar,editar e excluir atraves de cases do switch e dentro deles atribuir a variaveis com os nomes respectivos ao seu nome no banco de dados para facilitar, apos isso cria uma variavel sql ela recebe o  INSERT INTO que siginificar inserir no banco de dados em usuarios e dentro dos parenteses chamamos os valores que temos no banco de dados e com o VALUES atribuimos agora o novo valor que esta sendo enviado atraves do ($_Request[acao]),apos a atribuicao agora recuperamos a variavel de configuracao do banco ($conn) e atribuimos o query com o nosso sql agora.-->

<?php
    switch($_REQUEST["acao"]){
        case "cadastrar": 
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $telefone = $_POST["telefone"];
            $mensalidade = $_POST["mensalidade"];
            $situacao = $_POST['situacao']; 
            $observacao = $_POST['observacao'];      
             
        
            $sql = "INSERT INTO usuarios (nome, email, senha, telefone, mensalidade,situacao,observacao) VALUES('{$nome}','{$email}','{$senha}','{$telefone}','{$mensalidade}','{$situacao}','{$observacao}')";

            $res = $conn->query($sql);  
           

            if($res==true){
                print "<script>alert('Cadastro feito com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Nao foi possivel fazer o cadastro tente novamente!');</script>";
                print "<script>location.href='?page=novo';</script>";
            }
            break;


      

        case "editar": 
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $telefone = $_POST["telefone"];
            $mensalidade = $_POST["mensalidade"];
            $situacao = $_POST['situacao']; 
            $observacao = $_POST['observacao'];    

            
            $sql = "UPDATE usuarios SET nome ='{$nome}',
                                        email ='{$email}',
                                        senha ='{$senha}',
                                        telefone ='{$telefone}',
                                        mensalidade ='{$mensalidade}',
                                        situacao = '{$situacao}',
                                        observacao = '{$observacao}'
                                        WHERE id=".$_REQUEST["id"];     
                                            

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com Sucesso ');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Nao foi possivel fazer o Editar tente novamente!');</script>";
                print "<script>location.href='?page=novo';</script>";
            }    
                break;

      
          
        case "excluir": 
           $sql = "DELETE From usuarios WHERE id=".$_REQUEST["id"];

           $res = $conn->query($sql);
           if($res==true){
            print "<script>alert('Excluido com Sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Nao foi possivel excluir tente novamente!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }    

            break;
    }

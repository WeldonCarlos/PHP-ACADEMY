<!-- listando atraves do select todos os itens da tabela no banco de usuarios-->
<link rel="stylesheet" href="./estilos/home.css"/>

<h1>Alunos Cadastrados</h1>
<?php
$sql = "SELECT  * FROM usuarios";
$res = $conn->query($sql);

$qtd = $res->num_rows;




if ($qtd > 0 && $row = $res->fetch_object()) {

    print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th class='Head__Table'>Nome</th>";
        print "<th class='Head__Table'>Email</th>";
        print "<th class='Head__Table'>Telefone</th>";
        print "<th class='Head__Table Layout__Mobile'>Mensalidade</th>";
        print "<th class='Head__Table Situacao'>Situação</th>";
        print "<th class='Head__Table diferente'>Mensalidade</th>";    
        print "<th class='Head__Table diferente__Situacao'>Situação</th>";
        print "<th class='Head__Table diferente'>Editar</th>";
        print "<th class='Head__Table diferente'>Excluir</th>";
     
      
        print "</tr>";

    while ($row = $res->fetch_object()) {

        print "<tr>";
        print "<td class='Body__Table'>". $row->nome."</td>";
        print "<td class='Body__Table'>". $row->email ."</td>";
        print "<td class='Body__Table'>". $row->telefone ."</td>";
        print "<td class='Body__Table'>"."R$ ". number_format($row->mensalidade,2,'.')."</td>";
        print "<td class='Body__Table buttonNone'>".$row->situacao."</td>";

        print "<td class='buttonNone'> <button onClick=\"location.href='?page=editar&id=".$row->id."'\" class='btn btn-success '>Editar</button></td>";

        print "<td class='buttonNone'> <button onClick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';} else{false;} \" class='btn btn-danger'>Excluir</button></td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'> Não encotrou resultado </p>";
}
?>
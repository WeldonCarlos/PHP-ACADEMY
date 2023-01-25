<!--Esse novo select esta pegando todos os itens do banco de usuarios mas agora pegando apenas pelo Id recuperado pelo request -->
<link rel="stylesheet" href="./estilos/home.css"/>
<h1>Editar</h1>


<?php
    $sql = "SELECT  * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="nome" autofocus required value="<?php print $row->nome;?>"class="form-control"/>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" required value="<?php print $row->email; ?>" class="form-control"/>
    </div>
    <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="password" name="senha" value="<?php print $row->senha;?>" required class="form-control"/>
    </div>
    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input type="number" name="telefone" required value="<?php print $row->telefone;?>" class="form-control"/>
    </div>
    <div class="mb-3">
        <label class="form-label">Valor da Mensalidade</label>
        <input type="number" step="0.001" min="0.1" name="mensalidade" required value="<?php print number_format($row->mensalidade,2,',','.');?>"class="form-control"/>
    </div>
    <div class="mb-3">
        <label class="form-label">Aluno Ativo ou Inativo</label>
         <select class="form-select" name="situacao" aria-label="Default select example">
         <option value="Ativo" selected>Ativo</option>
         <option value="Inativo" >Inativo</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Observação</label>
        <textarea class="form-control"  cols='18' rows='8' required name="observacao" class="form-control"><?php print $row->observacao;?></textarea>
    </div>

    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  


</form>
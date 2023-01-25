<!--Pagina do formulario com o metodo post e o action para redirecionar para a proxima pagina apos envio de dados para o sql -->

<h1>Novo Aluno</h1>
<form class="mb-3" action="?page=salvar" method="POST">
    <input type="hidden" class="form-control" name="acao" value="cadastrar">


    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text"class="form-control" required name="nome" autofocus class="form-control"/>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email"class="form-control" required name="email" class="form-control"/>
    </div>
    <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="password"required  class="form-control" name="senha" class="form-control"/>
    </div>
    <div class="mb-3">
        <label class="form-label" >Telefone</label>
        <input type="number" required class="form-control" name="telefone" class="form-control"/>
    </div>
    <div class="mb-3">
        <label class="form-label">Valor da Mensalidade</label>
        <input type="number" step="0.001" class="form-control" min="0.1" max="1000000" name="mensalidade" class="form-control"/>
    </div>

    <div class="mb-3">
        <label class="form-label">Aluno Ativo ou Inativo</label>
         <select class="form-select" name="situacao" aria-label="Default select example">
         <option required selected>Selecione uma Opção</option>
         <option required value="Ativo" label="Ativo" selected>Ativo</option>
         <option required value="Inativo" label="Inativo" >Inativo</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Observação</label>
        <textarea class="form-control" cols='20' rows='10' name="observacao" class="form-control"></textarea>
    </div>

    

    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  


</form>
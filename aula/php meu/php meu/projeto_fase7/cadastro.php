<?php require 'template/header.php'; ?>

  <!-- ======= MENU DO PROJETO ======== -->
  <?php require 'template/menu.php'; ?>
  <!-- =============== FIM DO MENU =============== -->

  <!-- =============== Conteúdo ================== -->
  <main class="container" style="padding-top: 4.5rem;">
    <header>
      <h1>Impacta Sales Tec
        <small>Market Place de produtos tecnologicos</small>
      </h1>
    </header>
    <br>
    <!-- =============== Pagina ================== -->
    <div class="row">
      <div>
        <h1>Cadastre-se</h1>
        <p>Preencha seus dados abaixo:</p>
      </div>
    </div>

    <div class="row">
      <form class="col-lg-6" method="POST" action="cadastrodb.php">
        <div class="form-group row">
          <label for="nome" class="col-sm-2 col-form-label">Nome</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2">Email</label>
          <div class="col-sm-10 col-lg-10">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
          </div>
        </div>
        <div class="form-group row">
            <label for="senha" class="col-sm-2">Senha</label>
            <div class="col-sm-10 col-lg-10">
              <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
            </div>
          </div>
        <div class="form-group row">
          <label for="endereco" class="col-sm-2">Endereço</label>
          <div class="col-sm-10 col-lg-10">
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço">
          </div>
        </div>
        <div class="form-group row">
          <label for="cidade" class="col-sm-2">Cidade</label>
          <div class="col-sm-10 col-lg-10">
            <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Cidade">
          </div>
        </div>
        <div class="form-group row">
          <label for="estado" class="col-sm-2">Estado</label>
          <div class="col-sm-10 col-lg-10">
            <select class="form-control" name="estado" id="estado">
              <option>SP</option>
              <option>RJ</option>
              <option>MG</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </div>
      </form>
    </div>
    <!-- =============== Fim Pagina ================== -->

  </main>
  <!-- =============== Fim do Conteúdo ================== -->
<?php require 'template/footer.php'; ?>
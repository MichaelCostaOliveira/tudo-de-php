<?php
require 'lib/funcoes.php';

$carrinho = [
    ['Notebook Gamer ACER', 5095.20],
    ['Scanner Epson', 2012.40],
    ['Nobreak SMS Manager', 598.00]
];
require 'template/header.php';
?>
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
          <h1>Carrinho de compras</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-10">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Produtos</th>
                <th>Preço</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $total = 0;
              foreach ($carrinho as $produto) {
                echo '<tr>';
                echo '<td>' . $produto[0] . '</td>';
                echo '<td>' . float_to_reais($produto[1]) . '</td>';
                echo '</tr>';
                $total += $produto[1];
              }
              ?>
              <tr class="table-dark">
                <td>Total</td>
                <td> <?=float_to_reais($total)?> </td>
              </tr>
            </tbody>
          </table>
          <div>
            <a class="btn btn-success" href="#">Comprar</a>
          </div>
        </div>
      </div>
      <!-- =============== Fim Pagina ================== -->
    </main>
    <!-- =============== Fim do Conteúdo ================== -->
<?php require 'template/footer.php'; ?>
<?php
require __DIR__ . '/vendor/autoload.php';

use Impacta\Carrinho;

$carrinho = Carrinho::getProdutos();

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
                echo '<td>' . $produto['nome'] . '</td>';
                echo '<td>' . float_to_reais($produto['preco']) . '</td>';
                echo '</tr>';
                $total += $produto['preco'];
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
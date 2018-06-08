<!--
Projeto idealizado por Leonardo Tumadjian
Criado especialmente para Impacta curso PHP Modulo 1
-->
<?php require 'dumps/produtos_array.php'; ?>
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
        <!-- =============== Produtos ================== -->
        <div class="row">
            <?php foreach ($produtos as $produto) : ?>
            <div class="col-md-16 col-sm-16 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="<?=$produto['img']?>" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><?=$produto['nome']?></h4>
                        <p class="card-text"><?=$produto['descricao']?></p>
                        <h2><?=$produto['preco']?></h2>
                        <a href="#" class="btn btn-primary">Adicionar ao carrinho</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- =============== Fim dos Produtos ================== -->

        <!-- =============== Paginação ================== -->
        <nav>
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- =============== Fim da Paginação ================== -->
    </main>
    <!-- =============== Fim do Conteúdo ================== -->
<?php require 'template/footer.php'; ?>

<!--=====================================================
                            TOP
======================================================-->


<div class="container-fluid barraSuperior" id="top">
    <div class="container">
        <div class="row">

            <!--==== START SECTION SOCIAL ====-->

            <?php

            $social = LayoutController::callStyle();

            $redesJSON = json_decode($social['redes_sociales'], true);
            ?>

            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">

                <ul>
                    <?php foreach ($redesJSON as $redes): ?>
                    <li>
                        <a href="<?= $redes['url']; ?>" target="_blank">
                            <i class="fa <?= $redes['red']; ?> redSocial <?= $redes['style'];?>" aria-hidden="true"></i>
                        </a>
                    </li>
                    <?php endforeach ?>

                </ul>

            </div>
            <!--==== END SECTION SOCIAL ====-->

            <!--==== START SECTION REGISTRO ====-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
                
                <ul>
                    <li>
                        <a href="#modalIngreso" data-toggle="modal">Ingresar</a>
                    </li>

                    <li>|</li>

                    <li>
                        <a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a>
                    </li>
                </ul>
                
            </div>
            <!--==== END SECTION REGISTRO ====-->
        </div>
    </div>
</div>

<!--=====================================================
                           HEADER
======================================================-->

<header class="container-fluid">

    <div class="container">

        <div class="row" id="cabezote">

            <!--==== START SECTION LOGOTIPO ====-->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
                <a href="#">
                    <img src="http://localhost:8000/backend/<?= $social['logo'] ?>" alt="" class="img-responsive">
                </a>
            </div>
            <!--==== END SECTION LOGOTIPO ====-->

            <!--==== START SECTION CATEGORIAS Y BUSCADOR ====-->
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

                <!--==== START SECTION CATEGORIA ====-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
                    <p>
                        CATEGORIAS
                        <span class="pull-right">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                    </p>
                </div>
                <!--==== END SECTION CATEGORIA ====-->

                <!--==== START SECTION BUSCADOR ====-->
                <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
                    <input type="search" name="buscar" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                        <a href="#">
                            <button class="btn btn-default backColor" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </a>
                    </span>
                </div>
                <!--==== END SECTION BUSCADOR ====-->

            </div>
            <!--==== END SECTION CATEGORIAS Y BUSCADOR ====-->

            <!--==== START SECTION CARRITO ====-->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
                <a href="#">
                    <button class="btn btn-default pull-left backColor">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </button>
                </a>
                <p>
                    TU CESTA <span class="cantidadCesta">3</span> <br> USD $<span class="sumaCesta">20</span>
                </p>
            </div>
            <!--==== END SECTION CARRITO ====-->

        </div>

        <!--==== START SECTION CATEGORIAS ====-->
        <div class="col-xs-12 backColor" id="categorias">

            <?php
                $categories = ProductoController::getCategories();
            ?>

            <?php foreach ($categories as $category): ?>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                    <h4>
                        <a href="<?= $category['ruta']?>" class="pixelCategorias"><?= $category['nombre'] ?></a>
                    </h4>

                    <hr>
                    <?php
                        $subCategories = ProductoController::getSubCategories($category['id']);
                    ?>
                    <ul>
                        <?php foreach ($subCategories as $subCategory): ?>
                            <li>
                                <a href="<?= $subCategory['ruta'];?>" class="pixelSubCategorias"><?= $subCategory['nombre'];?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            <?php endforeach; ?>

        </div>
        <!--==== END SECTION CATEGORIAS ====-->

    </div>

</header>




<?php
include_once './public/header.php';
?>
<div class="container mainText">
    <article class="mainText col-md-12 bg-light text-center">
        <form class="paddForm" action="?Controller=CleaningProduct&action=showProduct" method="post">
            <div class="mb-3">
                <label class="form-label" for="name">Nombre:</label>
                <input class="form-control" type="text" id="name" name="name" required />
            </div>
            <div>
                <input class="btn btn-secondary" type="submit" value="Buscar" />
            </div>
        </form>

        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
            </tr>
            <?php
            if (count($vars['list']) > 0) {
                foreach ($vars['list'] as $product) {
            ?>
                    <tr>
                        <td><?php echo $product[0]; ?></td>
                        <td><?php echo $product[1]; ?></td>
                        <td><?php echo $product[2]; ?></td>
                        <td><?php echo $product[3]; ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>

        <div>
    </article>

    <?php
    include_once './public/footer.php';
    ?>
</div>
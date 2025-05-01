<!--Bootstrap CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<Style>
    .detailsBox.boxSmall {
        width: 136px;
        padding: 8px;
        height: 20px;
    }
</style>
<div style="padding: 20px 25px 0 25px">
    <?php
    echo CHtml::link("Add Product", array("product/create"), array(
        'class' => 'btn btn-dark',
    ));
    ?>
</div>

<div class="row" style="padding: 25px;">
    <?php foreach ($products as $product) { ?>
        <div class="card" style="width: 18rem; margin: 6px; padding: 10px;">
            <img class="card-img-top rounded mx-auto" style="max-height: 183px; max-width: 183px;" src="/<?= !empty($product->image_path) ? $product->image_path : 'images/no_image.png'; ?>">
            <div class="card-body">
                <p class="card-text" style="text-align: center;"><?php echo CHtml::encode($product->name); ?></p>
            </div>
        </div>
    <?php } ?>
</div>
<br><br><br>
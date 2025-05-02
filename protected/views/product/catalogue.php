<!--Bootstrap CSS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-...your-integrity..." crossorigin="anonymous" referrerpolicy="no-referrer" />


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
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo CHtml::encode($product->name); ?></li>
                    <li class="list-group-item"><?php echo CHtml::encode($product->description); ?></li>
                    <li class="list-group-item"><?php echo CHtml::encode("Quantity " . $product->quantity); ?></li>  
                    </li>
                    <?php
                    echo CHtml::link('<i class="fa fa-trash"></i>', array('product/delete', 'id' => $product->product_id), array(
                        'class'   => 'btn btn-sm btn-danger',
                        'style'   => 'margin: 1px;',
                        'onclick' => "return confirm('Are you sure you want to delete this?');",
                    ));

                    echo CHtml::link('<i class="fa fa-pen"></i>', array('product/update', 'id' => $product->product_id), array('class' => 'btn btn-secondary btn-sm', 'style' => 'margin: 1px;'));
                    ?>
            </div>
        </div>
    <?php } ?>
</div>
<br><br><br>
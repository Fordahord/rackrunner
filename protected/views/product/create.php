<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h3 class="text-center mb-4">Add Product</h3>

                <div class="form">
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id'                     => 'product-form',
                        'enableClientValidation' => true,
                        'clientOptions'          => array('validateOnSubmit' => true),
                        'htmlOptions'            => array('enctype' => 'multipart/form-data'),
                    ));
                    ?>

                    <div class="mb-3">
                        <?php echo $form->labelEx($model, 'name'); ?>
                        <?php echo $form->textField($model, 'name', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'name'); ?>
                    </div>

                    <div class="mb-3">
                        <?php echo $form->labelEx($model, 'description'); ?>
                        <?php echo $form->textField($model, 'description', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'description'); ?>
                    </div>

                    <div class="mb-3">
                        <?php echo $form->labelEx($model, 'quantity'); ?>
                        <?php echo $form->textField($model, 'quantity', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'quantity'); ?>
                    </div>

                    <div class="mb-3">
                        <?php echo $form->labelEx($model, 'image_path'); ?>
                        <?php echo $form->fileField($model, 'image_path', array('class' => 'form-control')); ?>
                        <?php echo $form->error($model, 'image_path'); ?>
                    </div>

                    <div class="text-center">
                        <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>
                    </div>

                    <?php $this->endWidget(); ?>
                </div><!-- form -->
            </div>
        </div>
    </div>
</div>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id'                     => 'product-form',
        'enableClientValidation' => true,
        'clientOptions'          => array(
            'validateOnSubmit' => true,
        ),
        'htmlOptions'            => array('enctype' => 'multipart/form-data', 'aria-save-target' => true,),
    ));
    ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name'); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textField($model, 'description'); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'quantity'); ?>
        <?php echo $form->textField($model, 'quantity'); ?>
        <?php echo $form->error($model, 'quantity'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'image_path'); ?>
        <?php echo $form->fileField($model, 'image_path'); ?>
        <?php echo $form->error($model, 'image_path'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
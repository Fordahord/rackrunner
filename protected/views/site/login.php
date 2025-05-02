<div style="display: flex; justify-content: center; align-items: center; min-height: 80vh;">
    <div style="background: white; border: 1px solid #ccc; padding: 30px 40px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); max-width: 400px; width: 100%;">
        <h1>Login</h1>

        <p style="font-size: 12px;">Please fill out the following form with your login credentials:</p>

        <div class="form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id'                     => 'login-form',
                'enableClientValidation' => true,
                'clientOptions'          => array(
                    'validateOnSubmit' => true,
                ),
            ));
            ?>

            <div class="row">
                <?php echo $form->labelEx($model, 'username'); ?>
                <?php echo $form->textField($model, 'username'); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'password'); ?>
                <?php echo $form->passwordField($model, 'password'); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>

            <div class="row rememberMe">
                <label>
                    <?php echo $form->checkBox($model, 'rememberMe'); ?>
                    <?php echo $model->getAttributeLabel('rememberMe'); ?>
                </label>
                <?php echo $form->error($model, 'rememberMe'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton('Login'); ?>
            </div>

            <?php $this->endWidget(); ?>
        </div><!-- form -->
    </div>
</div>
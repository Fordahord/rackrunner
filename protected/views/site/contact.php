<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="warehouse management system" />
        <meta name="author" content="RackRunner" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/images/rack_runner_logo.png" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <!-- Material Icons -->
        <link href="css/styles3.css?v=3.0" rel="stylesheet">

    </head>
    <body>
        <br><br><br><br><br>


        <!--Contact Form-->
        <header class="masthead2">
            <section class="page-section" id="contact">
                <div class="container">
                    <div class="row gx-4 gx-lg-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6 text-center">
                            <h2 class="mt-0 text-black main-title ">Let's Get In Touch!</h2>
                            <hr class="divider" />
                            <p class="text-black mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-12">
                            <div class="wrapper">
                                <div class="row no-gutters">
                                    <div class="col-md-7">
                                        <?php if (Yii::app()->user->hasFlash('contact')): ?>

                                            <div class="flash-success">
                                                <?php echo Yii::app()->user->getFlash('contact'); ?>
                                            </div>

                                        <?php else: ?>

                                            <div class="form contact-wrap w-100 p-md-5 p-4">

                                                <?php
                                                $form = $this->beginWidget('CActiveForm', array(
                                                    'id'                     => 'contact-form',
                                                    'enableClientValidation' => true,
                                                    'clientOptions'          => array(
                                                        'validateOnSubmit' => true,
                                                    ),
                                                ));
                                                ?>

                                                <?php echo $form->errorSummary($model); ?>

                                                <div class="row">
                                                    <?php echo $form->labelEx($model, 'name'); ?>
                                                    <?php echo $form->textField($model, 'name'); ?>
                                                    <?php echo $form->error($model, 'name'); ?>
                                                </div>

                                                <div class="row">
                                                    <?php echo $form->labelEx($model, 'email'); ?>
                                                    <?php echo $form->textField($model, 'email'); ?>
                                                    <?php echo $form->error($model, 'email'); ?>
                                                </div>

                                                <div class="row">
                                                    <?php echo $form->labelEx($model, 'subject'); ?>
                                                    <?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 128)); ?>
                                                    <?php echo $form->error($model, 'subject'); ?>
                                                </div>

                                                <div class="row">
                                                    <?php echo $form->labelEx($model, 'body'); ?>
                                                    <?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50)); ?>
                                                    <?php echo $form->error($model, 'body'); ?>
                                                </div>

                                                <?php if (CCaptcha::checkRequirements()): ?>
                                                    <div class="row">
                                                        <?php echo $form->labelEx($model, 'verifyCode'); ?>
                                                        <div>
                                                            <?php $this->widget('CCaptcha'); ?>
                                                            <?php echo $form->textField($model, 'verifyCode'); ?>
                                                        </div>
                                                        <div class="hint">Please enter the letters as they are shown in the image above.
                                                            <br/>Letters are not case-sensitive.</div>
                                                        <?php echo $form->error($model, 'verifyCode'); ?>
                                                    </div>
                                                <?php endif; ?>

                                                <div class="row buttons">
                                                    <?php echo CHtml::submitButton('Submit'); ?>
                                                </div>

                                                <?php $this->endWidget(); ?>

                                            </div><!-- form -->

                                        <?php endif; ?>
                                    </div>
                                    <!-- Contact Information Section -->
                                    <div class="col-md-5 d-flex align-items-stretch">
                                        <div class="info-wrap bg-primary w-100 p-lg-5 p-4" style="height: min-content; border-radius: 8px;">
                                            <h3 class="mb-4 mt-md-4 text-white">Contact us</h3>
                                            <!-- Address Information -->
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="text pl-3 text-white">
                                                    <p><span>Address: Edinburgh</span></p>
                                                </div>
                                            </div>
                                            <!-- Phone Information -->
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <div class="text pl-3 text-white">
                                                    <p><span>Phone: </span>+44 7245982451</p>
                                                </div>
                                            </div>
                                            <!-- Email Information -->
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <div class="text pl-3 text-white">
                                                    <p><span>Email: </span>Rackrunner@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <!--End Contact Form-->
        <br><br><br><br>



        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="pricing-content">
                            <img src="images/rack_runner_logo.png" alt="Logo" style="width: 200px;">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricing-content"> 
                            <form action="subscribe.php" method="post">
                                <h5>Subscribe to our newsletter</h5>
                                <p>Monthly digest of what's new and exciting from us.</p>
                                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                    <label for="newsletter1" class="visually-hidden">Email address</label>
                                    <input id="newsletter1" type="email" class="form-control" required name="email" placeholder="Email address">
                                    <button type="submit" class="btn btn-info btn-xl2" name="subscribe">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="pricing-content">
                            <ul class="list-unstyled nav flex-column text-center">
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="project.php">Project</a></li>
                                <li><a href="meet_the_team.php">Meet The Team</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>





        <!-- Scripts -->
        <!-- Bootstrap JS and dependencies (Popper.js & Bootstrap bundle) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
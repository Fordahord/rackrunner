<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="warehouse management system" />
        <meta name="author" content="RackRunner" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rack runner</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/images/rack_runner_logo.png" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <!-- Material Icons -->
        <link href="css/styles3.css?v=3.0" rel="stylesheet">


    </head>


    <body>
        <div class="container d-flex flex-column align-items-center">

            <br><br><br>


            <div class="team-page">
                <h1 class="align-items-center main-title text-black">Meet Our Team</h1>
                <div class="team-container">
                    <div class="team-member">
                        <img class="team-photo" src="images/meet_the_team/Project-Manager.jpg" alt="Team Member" width="150" height="150">
                        <div class="info">
                            <h2 class="text-black">Greg Czapla</h2>
                            <h4 class="text-black">Project Manager</h4>
                            <p class="text-black">Oversees all phases of the project to ensure deadlines and quality are met effectively.</p>
                        </div>
                    </div>

                    <div class="team-member reverse">
                        <img src="images/meet_the_team/UI-UX-Designer1.jpg" alt="Team Member" width="150" height="150">
                        <div class="info">
                            <h2 class="text-black">Gabe</h2>
                            <h4 class="text-black">UI/UX Designer</h4>
                            <p class="text-black">Creates intuitive, user-friendly interfaces and designs to enhance user experience.</p>
                        </div>
                    </div>

                    <div class="team-member">
                        <img src="images/meet_the_team/UI-UX-Designer2.jpg" width="150" height="150">
                        <div class="info">
                            <h2 class="text-black">Chris</h2>
                            <h4 class="text-black">UI/UX Designer</h4>
                            <p class="text-black">Designs engaging visuals and ensures consistency across all product interfaces.</p>
                        </div>
                    </div>

                    <div class="team-member reverse">
                        <img src="images/meet_the_team/UI-UX-Designer3.jpg" alt="Team Member" width="150" height="150">
                        <div class="info">
                            <h2 class="text-black">Oliwier</h2>
                            <h4 class="text-black">UI/UX Designer</h4>
                            <p class="text-black">Focuses on usability and accessibility to deliver seamless experiences for all users.</p>
                        </div>
                    </div>

                    <div class="team-member">
                        <img src="images/meet_the_team/Front-End-Developer.jpg" alt="Team Member" width="150" height="150">
                        <div class="info">
                            <h2 class="text-black">Distinguishi</h2>
                            <h4 class="text-black">Front-End Developer</h4>
                            <p class="text-black">Implements clean, responsive UI components and builds engaging web interfaces.</p>
                        </div>
                    </div>

                    <div class="team-member reverse">
                        <img src="images/meet_the_team/Back-End-Developer.jpg" alt="Team Member" width="150" height="150">
                        <div class="info">
                            <h2 class="text-black">Kim/Yiting Jin</h2>
                            <h4 class="text-black">Back-End Developer</h4>
                            <p class="text-black">Develops server-side logic, APIs, and manages database operations efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>



        </div>


        <br>









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
                            <form method="post">
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
                            <?php
                            $this->widget('zii.widgets.CMenu', array(
                                'items'       => array(
                                    array('label' => 'Home', 'url' => array('/site/index'), 'visible' => Yii::app()->user->isGuest),
                                    array('label' => 'Project', 'url' => array('/client/dashboard'), 'visible' => Yii::app()->user->isGuest),
                                    array('label' => 'About', 'url' => array('/site/page', 'view' => 'about'), 'visible' => Yii::app()->user->isGuest),
                                    array('label' => 'Contact', 'url' => array('/site/contact'), 'visible' => Yii::app()->user->isGuest),
                                ),
                                'htmlOptions' => array(
                                    'class' => 'list-unstyled nav flex-column text-center'),
                            ));
                            ?>
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

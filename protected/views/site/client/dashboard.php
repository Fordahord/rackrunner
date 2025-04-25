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
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <link href="css/styles3.css?v=3.0" rel="stylesheet">

    </head>
    <body>
        <!-- Main -->
        <div class="container-fluid main-container">
            <h2 class="main-title text-black">DASHBOARD</h2>
            <div class="main-cards">
                <div class="card text-center">
                    <p class="fw-bold">PRODUCTS</p>
                    <span class="material-icons-outlined">inventory_2</span>
                    <h4>249</h4>
                </div>
                <div class="card text-center">
                    <p class="fw-bold">PURCHASE ORDERS</p>
                    <span class="material-icons-outlined">add_shopping_cart</span>
                    <h4>83</h4>
                </div>
                <div class="card text-center">
                    <p class="fw-bold">SALES ORDERS</p>
                    <span class="material-icons-outlined">shopping_cart</span>
                    <h4>79</h4>
                </div>
                <div class="card text-center">
                    <p class="fw-bold">INVENTORY ALERTS</p>
                    <span class="material-icons-outlined">notification_important</span>
                    <h4>56</h4>
                </div>
            </div>

            <div class="charts">
                <div class="charts-card">
                    <h5 class="text-center">Top 5 Products</h5>
                    <div id="bar-chart" style="height:200px; background:#f4f4f4;"></div>
                </div>
                <div class="charts-card">
                    <h5 class="text-center">Purchase and Sales Orders</h5>
                    <div id="area-chart" style="height:200px; background:#f4f4f4;"></div>
                </div>
            </div>
        </div>


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
        <!-- ApexCharts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
        <!-- Custom JS -->
        <script src="js/scripts2.js"></script>
        <!-- Bootstrap JS and dependencies (Popper.js & Bootstrap bundle) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
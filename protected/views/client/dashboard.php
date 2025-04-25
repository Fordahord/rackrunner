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


        <!-- Scripts -->
        <!-- ApexCharts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
        <!-- Custom JS -->
        <script src="js/scripts2.js"></script>
        <!-- Bootstrap JS and dependencies (Popper.js & Bootstrap bundle) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
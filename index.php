<?php
require_once "../helpers/functions.php";
$worker_count = getWorkerCount();
$worker_position = getPosition();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLESSED - NADAK VENTURES</title>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" type="text/css" href="style.css">      
</head>
<body> 
<div class="container">
    <?php
    include '../includes/sidebar.php';
    ?>
       <!-- Main Dashboard Content -->
    <div class="main-content">
        <h1>BLESSED - NADAK VENTURES</h1>
        <div class="grid">
            <div class="card" id="workersCard">
                <h2>Total Workers</h2>
                <p id="totalWorkers"><?php echo "$worker_count"; ?></p>
            </div>
            <div class="card" id="productsCard">
                <h2>Products Available</h2>
                <p id="totalProducts">1,250</p>
            </div>
            <div class="card">
                <h2>Daily Sales</h2>
                <p>$3,750</p>
            </div>
            <div class="card">
                <h2>Total Salary Paid</h2>
                <p>$45,000</p>
            </div>
        </div>          

        <!-- Products Table (hidden initially) -->
        <table class="products-table" style="display: none; margin-top: 20px;">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="productsTableBody">
                <!-- Product rows will be dynamically added here -->
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
<script src="js/script.js"></script>
</body>
</html>

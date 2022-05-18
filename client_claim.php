<!DOCTYPE html>
<html>

<head>
    <?php
    session_start();
    include 'connection.php';

    $username = $_SESSION["username"];
    ?>
    <style>
        input[type=text],
        select {
            width: 100%;
            padding: 8px 12px;
            margin: 2px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }


        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client's Claim</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <?php include 'client_header.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head">
                        <marquee direction="right" behavior="alternate">
                            Leadway Assurance Company Limited </br>
                            <small>office 25, Mogaji Are Rd, iyaganku GRA, Ibadan
                        </marquee>
                    </h1>
                    <h2 class="page-head-line">Client's Claim</h2>
                </div>
            </div>
            
            <?php
            
                $amount = 0;
                $sql = "SELECT SUM(amount) AS total FROM payment WHERE client_id = '$username'";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    $amount = $row['total'];
                }
            ?>
            <div class="row">
                <div class="col-md-4">
                    <div class="main-box mb-dull">
                        <a href="#">
                            <i class="fa fa-2x">TOTAL AMOUNT</i>
                            <h5>&#8358;<?php echo number_format($amount); ?></h5>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="main-box mb-dull">
                        <a href="#">
                            <i class="fa fa-2x">COMPANY'S COMMISSION</i>
                            <h5>&#8358;<?php echo number_format($amount * 0.1); ?></h5>
                        </a>                        
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="main-box mb-dull">
                        <a href="#">
                            <i class="fa fa-2x">AVAILABLE BALANCE</i>
                            <h5>&#8358;<?php echo number_format($amount - ($amount * 0.1)); ?></h5>
                        </a>                        
                    </div>
                </div>
            </div>
            <h4 style=" color: orange; font-weight: 800;"><i>Note:</i> The company's charges is 10% <br/> 
                                                             when you are Terminating any Policy type
                            </h4>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
    </div>
</body>

</html>
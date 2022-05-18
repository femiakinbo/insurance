<!DOCTYPE html>

<html>
<head>
<style>
    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        margin-left:2%;
        display:block;
        float: center;
    }
    .btn{
        background-color: #4CAF50;
        float: right;
        color:white;
        text-decoration:none;	
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-left:0%;
        font-size:110%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    .dis {
        pointer-events: none;
        cursor: default;
        color:#595959;
    }
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Claim</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
        
    </style>
</head>
<body>
<?php include 'header.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">CLAIMS
						</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="color: orange; font-weight: 700;">FOR LIFE ASSURANCE CLAIMS</h3>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" style="width: 100%">
                                <thead>
                                    <tr style="background-color: #d3d3d3; color: #000000;">
                                        <th>Type of Life Claims`</th>
                                        <th>Performance Indicator</th>
                                        <th>Target Timeline</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan=6 align=left>Savings/Endowment</td>
                                        <td rowspan=2 align=left>Acknowledgment of Claim</td>
                                        <td rowspan=2 align=left>within 24 hours of receipt of notice</td>
                                        <td align=left>Count from the noon of the working day of receipt of claim notification</td>
                                    </tr>
                                    <tr>
                                        <td align=left>Pre-maturity notice signed off by client of validity of account details previously provided</td>
                                    </tr>
                                    <tr>
                                        <td align=left>Maturity</td>
                                        <td align=left>Payment on the due date</td>
                                        <td align=left></td>
                                    </tr>
                                    <tr>
                                        <td rowspan=3 align=left>Surrender/Termination</td>
                                        <td align=left>48 hours for claims up to N250,000</td>
                                        <td rowspan=3 align=left>Count from the noon of the working day of receipt of executed voucher</td>
                                    </tr>
                                    <tr>
                                        <td align=left>72 Hours for payment higher than N250,000 and up to N7.5m</td>
                                    </tr>
                                    <tr>
                                        <td align=left>5 working days for claims above N7.5m</td>
                                    </tr>
                                    <tr>
                                        <td rowspan=3 align=left>Term Assurance</td>
                                        <td rowspan=3 align=left>Death</td>
                                        <td align=left>48 hours for claims up to N250,000</td>
                                        <td rowspan=3 align=left>Count from the noon of the working day of receipt of executed voucher</td>
                                    </tr>
                                    <tr>
                                        <td align=left>72 Hours for payment higher than N250,000 and up to N7.5m</td>
                                    </tr>
                                    <tr>
                                        <td align=left>5 working days for claims above N7.5m</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->            
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
</body>
</html>

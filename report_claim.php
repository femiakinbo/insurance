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
    <title>Client's | Report Claim</title>
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

            <div class="row">
                <div class="col-md-12">
                    <h3 style="color: orange; font-weight: 700;">REPORT A CLAIM</h3>
                    <div id="error-div" style="display: none;">
                        <div class="alert alert-danger alert-dismissible">
                            <span id="error-message"></span>
                        </div>
                    </div>
                    <div id="success-div" style="display: none;">
                        <div class="alert alert-success alert-dismissible">
                            <span id="success-message"></span>
                        </div>
                    </div>
                    <form enctype="multipart/form-data" method="post" name="report_claim" id="report_claim">
                        <input type="hidden" name="client_id" id="client_id" value="<?php echo $username; ?>">
                        <div class="form-group">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment <span class="text-danger">*</span></label>
                            <textarea name="comment" id="comment" required class="form-control" rows="5" style="resize: none;" placeholder="Your comment goes here"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="document">Upload supporting documents</label>
                            <input type="file" name="document" id="document" class="form-control">
                        </div>

                        <div class="form-group">
                            <button id="submit-btn" class="btn btn-warning btn-block">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#report_claim').on('submit', function(e) {
                e.preventDefault();

                $('#error-div').hide();
                $('#success-div').hide();
                $('#error-message').empty();
                $('#success-message').empty();

                let formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "/insurance/reportClaim.php",
                    cache: false,
                    processData: false,
                    dataType: false,
                    contentType: false,
                    data: formData,
                    success: function(response) {
                        if (response.status == 200) {
                            $('#success-message').append(response.message);
                            $('#success-div').show();
                            setTimeout(() => {
                                $('#success-div').fadeOut();
                            }, 3000);
                        } else {
                            $('#error-message').append(response.message);
                            $('#error-div').show();
                            setTimeout(() => {
                                $('#error-div').fadeOut();
                            }, 3000);
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>
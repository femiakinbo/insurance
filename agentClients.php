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
    <title>agentClients</title>


    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line"><center>List of Client Registered </center>
						</h1>
                        <button class="btn btn-xs" align="center">
                            <a href="addClient.php" class="btn">Add Client</a>
                        </button>
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php

    include'connection.php';

    $sql = "SELECT * FROM client WHERE agent_id = '".$_SESSION['username']."'";
    $result = $conn->query($sql);

    echo "<table class='table'>
        <thead>
            <tr>
                <th>#</th>
                <th>Picture</th>
                <th>Fullname</th>
                <th>Phone</th>
                <th>Sex</th>
                <th>Date of Birth</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
    ";
    $i = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$i}</td>
            <td><img src='uploads/{$row["image"]}' style='width: 40px; height: 40px; border-radius: 50%;'></td>
            <td>{$row['name']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['sex']}</td>
            <td>{$row['birth_date']}</td>";
            echo '<td style="text-align: center;">
            <a title="VIEW NOMINEES" href="/insurance/nominee.php?client_id='.$row['client_id'].'" class="text-primary">
            <i class="fa fa-eye fa-2x"></i></a>
            </td>
        </tr>';
        $i++;
    }
    echo "</tbody>
    </table>";
?>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>

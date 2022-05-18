<?php
if(!isset($_SESSION))
session_start();
include 'connection.php';
$username = $_SESSION["username"];

$sql = "SELECT client_id FROM client WHERE client_id = '$username'";
$result = $conn->query($sql);
if ($result->num_rows < 1) {
    return header('Location: index.php');
}
?>

<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">

    <div class="navbar-header">

        <a class="navbar-brand" href="index.php">Leadway Assurance </a>
    </div>

    <div class="header-right">

        <a href="<?php echo "logout.php" ?>" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

    </div>
</nav>

<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="assets/img/user.png" class="img-thumbnail" />

                    <div class="inner-text">
                        <?php
                        if (!isset($_SESSION["username"])) {
                            header("Location: index.php");
                        } else {
                            echo "welcome, " . $_SESSION["username"];
                        }
                        ?>
                        <br />

                    </div>
                </div>

            </li>
            <li>
                <a href="/insurance/information.php"><i class="fa fa-info"></i>Information</a>
                
            </li>

            <li>
                <a href="/insurance/client_claim.php"><i class="fa fa-info"></i>Claim</a>
                
            </li>
            <li>
                <a href="/insurance/report_claim.php"><i class="fa fa-info"></i>Report Claim</a>
            </li>
        </ul>
    </div>
</nav>
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
	<title>Client's Status</title>
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

					<h2 class="page-head-line">Client's Status</h2>

					<!-- /. ROW  -->
										
					<?php
					
					$client_id = $_SESSION["username"];

					//   PRINTS CLIENT's info
					$sql = "SELECT * from client where client_id='$client_id'";
					$result = $conn->query($sql);
					$policy_id = "";

					while ($row = $result->fetch_assoc()) {
						$images = $row["image"];
					?>
						<img class="profile-user-img img-responsive" width="200px" height="200px" src="<?php echo "uploads/" . $images ?>" alt="User profile picture">
					<?php
						echo "<label for=\"fname\">CLIENT ID</label>";
						echo "<input disabled type=\"text\" client_id=\"fname\" name=\"client_id\" placeholder=\"Your id..\" value=\"$row[client_id]\">";
						echo "<label for=\"fname\">NAME</label>";
						echo "<input disabled type=\"text\" client_id=\"fname\" name=\"name\" placeholder=\"Your Name..\" value=\"$row[name]\">";
						echo "<label for=\"fname\">GENDER</label>";
						echo "<input disabled type=\"text\" client_id=\"fname\" name=\"sex\" placeholder=\"Your Gender..\" value=\"$row[sex]\">";
						echo "<label for=\"fname\">BIRTH DATE</label>";
						echo "<input disabled type=\"text\" client_id=\"fname\" name=\"birth_date\" placeholder=\"Your Birth Date..\" value=\"$row[birth_date]\">";
						echo "<label for=\"fname\">MARITIAL STATUS</label>";
						echo "<input disabled type=\"text\" client_id=\"fname\" name=\"marital_status\" placeholder=\"Your Maritial Status..\" value=\"$row[marital_status]\">";
						echo "<label for=\"fname\">NID</label>";
						echo "<input disabled type=\"text\" client_id=\"fname\" name=\"nid\" placeholder=\"Your NID..\" value=\"$row[nid]\">";
						echo "<label for=\"fname\">PHONE</label>";
						echo "<input disabled type=\"text\" client_id=\"fname\" name=\"phone\" placeholder=\"Your Phone..\" value=\"$row[phone]\">";
						echo "<label for=\"fname\">ADDRESS</label>";
						echo "<input disabled type=\"text\" client_id=\"fname\" name=\"address\" placeholder=\"Your Address..\" value=\"$row[address]\">";
						echo "<label for=\"fname\">POLICY ID</label>";
						echo "<input disabled type=\"text\" client_id=\"fname\" name=\"policy_id\" placeholder=\"policy id..\" value=\"$row[policy_id]\">";
						$policy_id = $row["policy_id"];
						$c_id      = $row["client_id"];
						$agent_id  = $row["agent_id"];
					}
					echo "<br>\n";

					echo "<br>\n";

					// PRINTS policy info

					$sql = "SELECT policy_id,term,health_status,system,payment_method,policy_type, age_limit FROM policy where policy_id = '{$policy_id}'";
					$result = $conn->query($sql);
					echo '<hr>';
					echo '<h3>Policy Information</h3>';
					echo "<table class=\"table\">\n";
					echo "<thead>";
					echo "  <tr>\n";
					echo "    <th>POLICY ID</th>\n";
					echo "    <th>TERM</th>\n";
					echo "    <th>TOTAL AMOUNT</th>\n";
					echo "    <th>PER MONTH</th>\n";
					echo "    <th>PAYMENT METHOD</th>\n";
					echo "    <th>POLICY TYPE</th>\n";
					echo "    <th>AGE LIMIT</th>\n";
					echo "  </tr>
					</thead>
					<tbody>";
					// output data of each row
					while ($row = $result->fetch_assoc()) {

						echo "<tr>\n";
						echo "    <td>" . $row["policy_id"] . "</td>\n";
						echo "    <td>" . $row["term"] . "</td>\n";
						echo "    <td>" . $row["health_status"] . "</td>\n";
						echo "    <td>" . $row["system"] . "</td>\n";
						echo "    <td>" . $row["payment_method"] . "</td>\n";
						echo "    <td>" . $row["policy_type"] . "</td>\n";
						echo "    <td>" . $row["age_limit"] . "</td>\n";
						echo "</tr>";
					}

					echo "</tbody>
					</table>";
					?>

				</div>
				<?php
				//   PRINTS AGEENTS INFO
				$sql = "SELECT agent_id, name ,branch, phone FROM agent where agent_id='$agent_id'";
				$result = $conn->query($sql);
				echo '<hr>';
				echo '<h3>Agent Information</h3>';
				echo "<table class=\"table\">\n";
				echo "<thead>";
				echo "  <tr>\n";
				echo "    <th>AGENT ID</th>\n";
				echo "    <th>NAME</th>\n";
				echo "    <th>BRANCH</th>\n";
				echo "    <th>PHONE</th>\n";
				echo "  </tr>";
				echo "  </tr>
					</thead>
				<tbody>";

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {

						echo "<tr>\n";
						echo "    <td>" . $row["agent_id"] . "</td>\n";
						echo "    <td>" . $row["name"] . "</td>\n";
						echo "    <td>" . $row["branch"] . "</td>\n";
						echo "    <td>" . $row["phone"] . "</td>\n";
						echo "</tr>";
					}
				}
				echo "</tbody>
				</table>";

				// prints nominee infos 
				$sql = "SELECT * FROM nominee where client_id='$c_id'";
				$result = $conn->query($sql);

				echo '<hr>';
				echo '<h3>Nominees</h3>';
				echo "<table class=\"table\">\n";
				echo "<thead>";
				echo "  <tr>\n";
				echo "    <th>NAME</th>\n";
				echo "    <th>GENDER</th>\n";
				echo "    <th>BIRTH DATE</th>\n";
				echo "    <th>RELATIONSHIP</th>\n";
				echo "    <th>PRIORITY</th>\n";
				echo "    <th>PHONE</th>\n";
				echo "  </tr>";
				echo "</thead>
				<tbody>";

				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {

						echo "<tr>\n";
						echo "    <td>" . $row["name"] . "</td>\n";
						echo "    <td>" . $row["sex"] . "</td>\n";
						echo "    <td>" . $row["birth_date"] . "</td>\n";
						echo "    <td>" . $row["relationship"] . "</td>\n";
						echo "    <td>" . $row["priority"] . "</td>\n";
						echo "    <td>" . $row["phone"] . "</td>\n";
						$nominee_id = $row["nominee_id"];
						echo "</tr>";
					}
				}
				echo "</tbody>
				</table>";

				//prints payments 
				$sql = "SELECT * FROM payment where client_id='$c_id'";
				$result = $conn->query($sql);
				echo '<h3>Payments</h3>';
				echo "<table class='table'>
					<thead>
					  <tr>
					    <th>RECIPT NO</th>
					    <th>CLIENT ID</th>
					    <th>MONTH</th>
					    <th>YEAR</th>
					    <th>FINE</th>
					    <th>AMOUNT</th>
					  </tr>
					</thead>
					<tbody>";

				$sum = 0;
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo "<tr>\n";
						echo "    <td>" . $row["recipt_no"] . "</td>\n";
						echo "    <td>" . $row["client_id"] . "</td>\n";
						echo "    <td>" . $row["month"] . "</td>\n";
						echo "    <td>" . $row["fine"] . "</td>\n";
						echo "    <td>" . $row["year"] . "</td>\n";
						echo "    <td>" . number_format($row["amount"]) . "</td>\n";
						echo "</tr>";
						$sum += (float)$row["amount"];
					}
				}
				echo "<tr>
					<td colspan='5'></td>
					<td colspan='1'>&#8358;" . number_format($sum) . "</td>
				</tr>
				</tbody>
				</table>";

				$conn->close();
				?>

			</div>


		</div>
		<!-- /. PAGE WRAPPER  -->


	</div>
	<!-- /. WRAPPER  -->





</body>

</html>
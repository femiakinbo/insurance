<?php
session_start();

if (isset($_SESSION["username"])) {
	header("Location: home.php");
}
?>

<head>
	<style>
		.container {
			width: 450px;
			height: 700px;
			margin: auto;
			margin-top: 4%;
			padding-top: 1px;

		}

		.login-page {
			width: 360px;
			padding: 8% 0 0;
			margin: auto;
		}

		.form {
			padding-top: 30px;
			position: relative;
			z-index: 1;
			background: #FFFFFF;
			max-width: 349px;
			margin: 0 auto 100px;
			padding: 45px;
			text-align: center;
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}

		.form input {
			font-family: "Roboto", sans-serif;
			outline: 0;
			background: #f2f2f2;
			width: 100%;
			border: 0;
			margin: 0 0 15px;
			padding: 15px;
			box-sizing: border-box;
			font-size: 14px;
		}

		.form button {
			font-family: "Roboto", sans-serif;
			text-transform: uppercase;
			outline: 0;
			background: #4CAF50;
			width: 100%;
			border: 0;
			padding: 15px;
			color: #FFFFFF;
			font-size: 14px;
			-webkit-transition: all 0.3 ease;
			transition: all 0.3 ease;
			cursor: pointer;
		}

		.form button:hover,
		.form button:active,
		.form button:focus {
			background: #43A047;
		}




		.imgs {
			padding-top: 20px;
			margin-left: 32%;
			weight: 35%;
			height: 25%;
		}
	</style>
	<title>Login Page</title>
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
<div class="container">
	<img class="imgs" src="leadway.png" alt="Login Logo">
	<div class="login-page">
		<div class="form">
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
			<form class="login-form" id="login_form" method="POST">
				<input type="text" name="username" id="username" placeholder="username" />
				<input type="password" name="password" id="password" placeholder="password" />
				<button>login</button>
			</form>
		</div>
	</div>
</div>

<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript">
	'use strict';
	$(document).ready(function() {
		$('#login_form').on('submit', function(e) {
			e.preventDefault();

			$('#error-div').hide();
			$('#success-div').hide();

			$('#error-message').empty();
			$('#success-message').empty();

			let username = $('#username').val();
			let password = $('#password').val();

			$.ajax({
				type: "POST",
				url: "/insurance/login.php",
				data: {
					password: password,
					username: username
				},
				success: function(response) {
					console.log(response);
					if (response.status == 200) {
						$('#success-message').append(response.message);
						$('#success-div').show();
						setTimeout(() => {
							$('#success-div').fadeOut();
						}, 3000);
						window.location.href = response.page;
					} else if (response.status == 401) {
						$('#error-message').append(response.message);
						$('#error-div').show();
						setTimeout(() => {
							$('#error-div').fadeOut();
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
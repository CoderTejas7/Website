<?php

	require "functions.php";
	check_login();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<style>
		body {
			background-color: #f8f9fa;
		}
		.navbar {
			background-color: #007bff;
			color: #fff;
		}
		.nav-link {
			color: #fff;
			font-weight: bold;
		}
		.nav-link:hover {
			color: #fff;
			text-decoration: underline;
		}
		.btn-logout {
			background-color: #dc3545;
			color: #fff;
			font-weight: bold;
			border-radius: 0;
			border: none;
			text-transform: uppercase;
		}
		.btn-logout:hover {
			background-color: #c82333;
			color: #fff;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark">
		
		<div class="container">
			<a class="navbar-brand" href="#">My Website</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					
					
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="profile.php">Profile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link btn-logout" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card">
				<div class="card-body">
    <h1 class="text-center mb-4">Profile</h1>
    <?php if(check_login(false)):?>
        <p>Hi, <?=$_SESSION['USER']->username?>;</p>

        <br>
        <?php if(!check_verified()):?>
            <a href="verify.php">
                <button class="btn btn-primary">Verify Profile</button>
            </a>
        <?php endif;?>

        <h2 class="text-center mb-4">Update Profile</h2>
        <form method="post" action="update_profile.php">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?=$_SESSION['USER']->email?>">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    <?php endif;?>
</div>

				</div>
			</div>
		</div>
	</div>

</body>
</html>

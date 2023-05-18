<nav class="navbar navbar-expand-lg navbar-dark">
	<div class="container">
		<a class="navbar-brand" href="#">My Website</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<?php if(!check_login(false)):?>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Signup</a>
				</li>
				<?php else:?>
				<li class="nav-item">
					<a class="nav-link" href="profile.php">Profile</a>
				</li>
				<li class="nav-item">
					<a class="nav-link btn-logout" href="logout.php">Logout</a>
				</li>
				<?php endif;?>
			</ul>
		</div>
	</div>
</nav>

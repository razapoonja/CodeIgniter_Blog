<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CodeIgniter Blog</title>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="<?= base_url(); ?>">CodeIgniter Blog</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url(); ?>about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url(); ?>posts">Blog</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container">
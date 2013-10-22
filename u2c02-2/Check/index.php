<?php 
	include 'check.php';
	$user = new User(escape($_POST['name']), escape($_POST['subname']));
	// if it's false, redirect
	if ($user->checkName() == "errW" || $user->checkSubname() == "errW") {
		header("Location: ../?name=".$user->checkName()."&subname=".$user->checkSubname());
		die();
	}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<title></title>
	<meta name="description" content="" />
	<link rel="stylesheet" href="../style.css" />
	<link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>
	<style rel="stylesheet">
		li{
			list-style: none;
			margin: 5% 0;
			width: 50px!important;
			color: white;
			border-bottom: 1px solid rgba(0,0,0, .2);
		}
		span{
			text-transform: capitalize;
			color: gray;
		}
		a{
			text-align: center;
			text-decoration: none;
			color: white;
			font-family: 'Lily Script One', cursive;
		}
	</style>
</head>
<body>
	<div id="form">
		<h1><?php echo $user->checkName(); ?> Personal Data </h1>
		<div id="datas">
			<ul>
				<li>
					<p>Your name is: <span><?php echo $user->checkName(); ?></span></p>
				</li>
				<li>
					<p>Your name is: <span><?php echo $user->checkSubname(); ?></span></p>
				</li>
				<li>
					<p>"Your genre is: <span><?php echo $_POST["genre"]; ?></span></p>
				</li>
				<li>
					<p>Your are married? <span><?php echo !empty($_POST["mStatus"]) ? "Yes :(" : "No! :)"; ?></span></p>
				</li>
				<li class="style-select">
					<p>Your province is: <span><?php echo $_POST["province"]; ?></span></p>
				</li>
				<li class="style-select">
					<p>Your second province is: <span><?php echo $_POST["province2"]; ?></span></p>
			</ul>
			<a href="../">Back</a>
		</div>
	</div>
	<footer>Develop & Disagned by RubenCiLara</footer>
</body>
</html>
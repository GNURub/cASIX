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
		.err{
			color: red;
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
<?php 
include 'check.php';
$user = new User(escape($_POST['name']), escape($_POST['subname']), $_POST['genre']);
?>
	<div id="form">
		<h1><?php echo $user->checkName(); ?> Personal Data </h1>
		<div id="datas">
			<ul>
				<li>
					<p><?php echo $user->checkName() ? "Your name is: <span>".$user->checkName()."</span>" : "The <span class='err'>name</span> cannot to be empy" ?></p>
				</li>
				<li>
					<p><?php echo $user->checkSubname() ? "Your name is: <span>".$user->checkSubname()."</span>" : "The <span class='err'>subname</span> cannot to be empy" ?></p>
				</li>
				<li>
					<p><?php echo $user->checkGenre() ? "Your genre is: <span>".$user->checkGenre()."</span>" : "The <span class='err'>genre</span> cannot to be empy" ?></p>
				</li>
				<li>
					<p><?php echo "Your are married? <span>", !empty($_POST["mStatus"]) ? "Yes :(" : "No! :)", "</span>"; ?></p>
				</li>
				<li class="style-select">
					<p><?php echo "Your province is: <span>".$_POST["province"]."</span>" ?></p>
				</li>
				<li class="style-select">
					<p><?php echo "Your second province is: <span>".$_POST["province2"]."</span>" ?></p>
			</ul>
			<a href="../">Back</a>
		</div>
	</div>
	<footer>Develop & Disagned by RubenCiLara</footer>
</body>
</html>
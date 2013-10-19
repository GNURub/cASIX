<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<title></title>
	<meta name="description" content="" />
	<link rel="stylesheet" href="style.css" />
	<link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="form">
		<h1>Input Your Personal Data</h1>
		<form action="./Check/" method="POST">
			<ul>
				<fieldset>
					<li>
						<input <?php echo $_GET["name"] == "errW" ? "style='border: 1px red solid;'" : "value='".$_GET["name"]."'"; ?> type="text" name="name" placeholder="Name" autocomplete="off" />
					</li>
					<li>
						<input <?php echo $_GET["subname"] == "errW" ? "style='border: 1px red solid;'" : "value='".$_GET["subname"]."'"; ?> type="text" name="subname" placeholder="Subname" autocomplete="off" />
					</li>
				</fieldset>
				<li>
					<input type="radio" value="Male" id="genreMale" name="genre" checked />
                    <label for="genreMale"><span></span>Male</label>
				</li>
				<li>
					<input type="radio" value="Female" id="genreFemale" name="genre" />
                    <label for="genreFemale"><span></span>Female</label>
				</li>
				<li>
					<input type="checkbox" id="mStatus" name="mStatus" />
                    <label for="mStatus"><span></span>Marital Status</label>
				</li>
				<li class="style-select">
					<select name="province">
						<option value="Avila">Ávila</option>
						<option value="Burgos">Burgos</option>
						<option value="Zamora">Zamora</option>
						<option value="Soria">Soria</option>
						<option value="Salamanca">Salamanca</option>
						<option value="Leon">León</option>
						<option value="Valladolid">Valladolid</option>
					</select>
				</li>
				<li class="style-select">
					<select name="province2">
						<option value="Eivissa">Eivissa</option>
						<option value="Avila">Ávila</option>
						<option value="Burgos">Burgos</option>
						<option value="Zamora">Zamora</option>
						<option value="Soria">Soria</option>
						<option value="Salamanca">Salamanca</option>
						<option value="Leon">Leon</option>
						<option value="valladolid">Valladolid</option>
					</select>
				</li>
				<li>
					<button>Send</button>
				</li>
			</ul>
		</form>
	</div>
	<footer>Develop & Disagned by RubenCiLara &copy;</footer>
</body>
</html>
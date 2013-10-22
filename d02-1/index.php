 <?php 
 $a = $_GET["a"];
 $b = $_GET["b"];
 $c = $_GET["c"];
function mayor($a, $b)
{
	return $a >= $b ? $a : $b;
}
echo $c >= mayor($a,$b) ? $c : mayor($a,$b);
 ?>
 <html>
	<head>
	</head>
	<body>
		<form action="#">
			<input name="a" type="number"/>
			<input name="b" type="number"/>
			<input name="c" type="number"/>
			<button>Send</button>
		</form>
	</body>
</html>
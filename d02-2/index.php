<?php 
	function fibonacci($nMy)
	{
		# code...
		$a = 1;
		$b = 0;
		if($nMy == 0){
			return "F(0) = 0";
		}elseif ($nmy == 1) {
			return "F(1) = 1";
		}else{
			for ($i = 0; $i < $nMy; $i++){
				$sum = $a + $b;
				$a = $b;
				$b = $sum;
			}
			return "F($nMy) = ".$sum;
		}
	}
	echo fibonacci($_GET["nMY"]);
 ?>
 <html>
	<head>
		<script>
			window.onload = function () {
				var nMy = document.querySelector("input")
				,	number = document.querySelector("#number")
				nMy.addEventListener("change",function () {
					// body...
					number.innerHTML = nMy.value;
				});
			}
		</script>
	</head>
	<body>
		<form action="#">
			<label id="number"></label>
			<input name="nMY" type="range" min="0" max="100"/>
			<button>Send</button>
		</form>
	</body>
</html>
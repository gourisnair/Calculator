<html>
	<head>
		<title>Sum</title>
			</title>
		<style>
			body{
				background-color:lightblue;
			}
			h1{
				color:white;
				text-align:center;
			}
		</style>
	</head>
		<body>
			<h1>ADD TWO NUMBERS</h1>
			<form action ="" method ="GET">
				Number1:<input type="number" placeholder ="first number" name ="n1"><br>
				Number2:<input type="number" placeholder ="second number" name ="n2"><br><br>
				<input type ="submit">
			
			</form>
			
		</body>
</html>
<?php
			function sum($n1,$n2){
				$sum = $n1 + $n2;
				
				echo '<input type="int" value="'.$sum.'">';
				
				}
sum($_GET['n1'],$_GET['n2']);
			
?>



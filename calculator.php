<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<form method="post">
		<label for="num1">Enter first number:</label>
		<input type="number" id="num1" name="num1" required><br><br>
		<label for="num2">Enter second number:</label>
		<input type="number" id="num2" name="num2" required><br><br>
		<label for="operator">Select an operation:</label>
		<select id="operator" name="operator">
			<option value="add">Addition (+)</option>
			<option value="sub">Subtraction (-)</option>
			<option value="mul">Multiplication (*)</option>
			<option value="div">Division (/)</option>
		</select><br><br>
		<input type="submit" value="Calculate">
	</form>
	<?php
		if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operator = $_POST['operator'];

			if(!is_numeric($num1) || !is_numeric($num2)) {
				echo "<p>Please enter valid numbers!</p>";
			}
			else {
				switch($operator) {
					case "add":
						$result = $num1 + $num2;
						echo "<p>The sum of $num1 and $num2 is $result</p>";
						break;
					case "sub":
						$result = $num1 - $num2;
						echo "<p>The difference between $num1 and $num2 is $result</p>";
						break;
					case "mul":
						$result = $num1 * $num2;
						echo "<p>The product of $num1 and $num2 is $result</p>";
						break;
					case "div":
						if($num2 == 0) {
							echo "<p>Cannot divide by zero!</p>";
						}
						else {
							$result = $num1 / $num2;
							echo "<p>The quotient of $num1 and $num2 is $result</p>";
						}
						break;
					default:
						echo "<p>Invalid operator selected!</p>";
				}
			}
		}
	?>
</body>
</html>

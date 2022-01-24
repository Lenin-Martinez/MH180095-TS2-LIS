
<html>
	<head>
	</head>
	<body>
		<form method="POST">
			<input type="text" name="num1">
			<br><br>
            <input type="text" name="num2">
			<br><br>
			<input type="submit" name="submit" value="Realizar calculos...">
		</form>
	</body>
</html>


<?php
	if(isset($_POST["submit"]) && !empty($_POST["submit"])) {


        $numero1 = $_POST["num1"];
        $numero2= $_POST["num2"];
        $suma = $numero1+$numero2;

		echo "<b>Con los numeros " .$numero1. " y " .$numero2. ", Los calculos basicos son:</b><br><br>"; 

		echo "(+) La suma de los dos numeros es: " .$suma. "<br>";

        $numero1 = $_POST["num1"];
        $numero2= $_POST["num2"];
        $resta = $numero1-$numero2;

		echo "(-) La resta de los dos numeros es: " .$resta. "<br>";
		
        $numero1 = $_POST["num1"];
        $numero2= $_POST["num2"];
        $division = $numero1/$numero2;

		echo "(/) La division de los dos numeros es: " .$division. "<br>";
		
        $numero1 = $_POST["num1"];
        $numero2= $_POST["num2"];
        $multiplicacion = $numero1*$numero2;

		echo "(x) La multiplicacion de los dos numeros es: " .$multiplicacion. "<br>";
		
        $numero1 = $_POST["num1"];
        $numero2= $_POST["num2"];
        $modulo = $numero1%$numero2;

		echo "(%) El modulo de los dos numeros es: " .$modulo. "<br>";
	}
?>
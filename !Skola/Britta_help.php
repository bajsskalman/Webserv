<!DOCTYPE>
<html lang="sv">
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="brittas.css">
		<title>Begangnat</title>
	</head>
	<body>
			<div class="meny">
				<a href="britta.php">Home</a>
				<a href="Britta_reg.php">Register</a>
				<a href="Britta_help.php">Support</a>
			</div>
	

		<div class="form">
			
			<form >
				<input placeholder="Username" type="text" name="username" required>
				<input placeholder="Email adress" type="text" name="mail" required>
				<select class="produkten">
					<option name="product" value="1">Pantburkar</option>
					<option name="product" value="2">Toapapper</option>
					<option name="product" value="3">Tandborste</option>
					<option name="product" value="4">Tuggummi</option>
					<option name="product" value="5">Tamponger</option>
					<option name="product" value="6">Fyverkerier</option>
					<option name="product" value="7">Engångsgrill</option>
					<option name="product" value="8">Glasspinnar</option>
					<option name="product" value="9">Bindor</option>
					<option name="product" value="10">Dammsugarpåsar</option>
					<option name="product" value="11">Tändstickor</option>
					<option name="product" value="12">Kaffesump</option>
					<option name="product" value="13">Snusprillor</option>
					<option name="product" value="14">Ciggaretfimpar</option>
					<option name="product" value="15">Kondomer</option>
					<option name="product" value="16" selected>Annat</option>
				</select>
				<textarea class="beskrivning" placeholder="Description" name="description"></textarea>


				<input name="submit" type="submit" Value="Submit">
			</form>
		</div>
	</body>
</html>
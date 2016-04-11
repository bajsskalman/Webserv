<!DOCTYPE html>
<html lang="sv">

	<head>

		<link rel="Stylesheet" href="CSS/cse.css" >

	</head>
	
	<body>
		
		<p id="rubrik"> Form </p>
		
		<main>
		
			<table>
			
				<form action="skicka/index.php" method="post">
				
					<tr>
						<td>
							<p>Namn:</p><p class="color-red">*</p><br>
							<input type="text" name="username" required>
						</td>
					</tr>
					
					<tr>
						<td>
							<p>Mail:</p><p class="color-red">*</p><br>
							<input type="text" name="email" size="30" required>
						</td>
					</tr>
					
					<tr>
						<td>
							<p>Kort beskrivning:</p><p class="color-red">*</p><br>
							<input type="text" name="short" size="40" required>
						</td>
					</tr>
					
					<tr>
						<td>
							<p>Detaljerad beskrivning:</p><br>
							<textarea type="text" name="Detail" rows="5" cols="40"></textarea>
						</td>
					</tr>
					
					<tr>
						<td>
							<p> Prioritet</p><p class="color-red">*</p><br>
							<input type="radio" name="Prio" value="1" required> Brucebanner 5
							<input type="radio" name="Prio" value="2"> High
							<input type="radio" name="Prio" value="3" checked> Medium 
							<input type="radio" name="Prio" value="4"> Flow Rida 
						</td>
					</tr>
					
					<tr>
						<td class="padding-0">
							<p class="color-red font-size-8 float-right"> * = Obligatoriskt </p>
						</td>
					</tr>
					
					<tr>
						<td class="center">
							<input type="submit" name="Submit" value="Skicka">
						</td>
					</tr>
					
				
				</form>
				
			</table>
			
		</main>
	
	</body>
	
</html>
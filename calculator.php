<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link rel="stylesheet" href="style.php">
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		<h1>Simple Calculator Using PHP</h1>


         <!-- Calculator form -->
		<form method="post" action="calculator.php">
		        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="plus">+</option>
		            <option value="minus">-</option>
		            <option value="times">*</option>
		            <option value="divided by">/</option>
		        </select>
		        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calculate" class="btn">
		    </form>



			<?php
			
				// If the submit button has been pressed
				
				if(isset($_POST['submit']))
				{
					// Check number values
					if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
					{
						// Calculate total
						if($_POST['operation'] == 'plus')
						{
							$total = $_POST['number1'] + $_POST['number2'];	
						}
						if($_POST['operation'] == 'minus')
						{
							$total = $_POST['number1'] - $_POST['number2'];	
						}
						if($_POST['operation'] == 'times')
						{
							$total = $_POST['number1'] * $_POST['number2'];	
						}
						if($_POST['operation'] == 'divided by')
						{
							$total = $_POST['number1'] / $_POST['number2'];	
						}
						
						// Print total to the browser
						echo "<h2>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} = {$total}</h2>";
					
					} else {
						
						// Print error message to the browser
						echo 'Numeric values are required';
					
					}
				}
			
			?>
		   
	    
		</div>
	
	</body>
</html>
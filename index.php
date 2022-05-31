<!DOCTYPE html>
<html>
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Factorial of Numbers">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Anita Kay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    <!-- Link to CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Factorial of Numbers</title>
  </head>
  <body>
    <?php
      echo "<h1>Factorial of Numbers</h1>"
    ?>
		<?php 
      echo "<h3>This program will calculate and display factorials:</h3>"
    ?>
		<table>
			<tr align = "center">
				<td valign="top" align="right">			
        <!-- Link to results.php -->
				<form action="./results.php" method="post" target="display-results">								
						<label for="number">Enter a positive number:</label>
						<input type="number" step="1" min="0" name="number"><br><br>	
            <!-- Submit button -->
						<input type="submit" value="Calculate Product">
					</form>
				</td>
        <!-- Image -->
				<td valign="top" align="left">
					<img src="./images/factorial.jpeg" alt="Factorial" width=200%>
				</td>
			</tr>
		</table>	
		<!-- Create a space where the user information will be displayed -->
		<iframe id="display-results" name="display-results">
    </iframe>
  </body>
</html>
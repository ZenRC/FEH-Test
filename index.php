<html>
	<head>
		<title>FE Heroes</title>
	</head>
	<body>
		<a href="index.php">Home</a>
		<div style="text-align:center">
			<h1>FE Catalog</h1>
			Name: <input name="name" type="text">
			<br><br>      
      Bane: <input name="stat" type="text" list="input1">
      <br><br>      
				<datalist id="input1">
					<option	value="Hit Points">
					<option	value="Attack">
					<option	value="Defense">
					<option	value="Speed">
					<option	value="Resistance">
					<option value="Neutral">
				</datalist>
      Boon: <input name="stat" type="text" list="input1">                        
        <br><br>
        <input type="submit" value="Submit">			
		</div>
	</body>
</html>
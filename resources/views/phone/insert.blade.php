<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<div>
		<center><br><br>
			
			<form action="/phone" method="post">

				{{csrf_field()}}

				<label>Name:</label>
				<input type="text" name="name" placeholder="name"><br><br>

				<label>Price</label>
				<input type="text" name="price" placeholder="price"><br><br>

				<input type="submit" name="submit">
			</form>

		</center>

	</div>

</body>
</html>
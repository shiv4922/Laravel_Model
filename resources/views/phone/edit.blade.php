<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<div>
		<center><br><br>
			
			<form action="{{url('/phone/update/')}}" method="post">

				{{csrf_field()}}

				<input type="hidden" name="id" value="{{$phone->id}}">

				<label>Name:</label>
				<input type="text" name="name" placeholder="name" value="{{$phone->name}}"><br><br>

				<label>Price</label>
				<input type="text" name="price" placeholder="price"
				value="{{$phone->price}}"><br><br>

				<input type="submit" name="submit">
			</form>

		</center>

	</div>

</body>
</html>
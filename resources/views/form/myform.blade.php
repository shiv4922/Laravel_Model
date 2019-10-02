



<!DOCTYPE html>
<html>
<head>
	<title>MYFORM</title>
</head>
<body>
	
 <!-- errors and messages show krme k lie   -->
@if($errors->any())
	@foreach($errors->all() as $error)
	<p>{{$error}}</p>

	@endforeach
@endif	


	<form action="/submitform" method="post">

		{{csrf_field()}} <!-- creates token for authentication-->

	<br><br><center>
	<label>Name:</label>
	<input type="text" name="name" placeholder="Name">
	<br>
<br>
	<label>email:</label>
	<input type="email" name="email" placeholder="email">
	<br><br>

	<label>password:</label>
	<input type="text" name="password" placeholder="password">
	<br><br>

	<input type="submit" name="submit"><br>
</center>
</form>

</body>
</html>




<!DOCTYPE html>
<html>
<head>
	<title>MYFORM</title>
</head>
<body>
	
 <!-- errors and messages show krme k lie   -->


	<form action="{{url('/posts')}}" method="post">

		 <!-- creates token for authentication-->
		 {{csrf_field()}}
	<br><br><center>
	<label>title:</label>
	<input type="text" name="title" placeholder="title">
	<br>
<br>
	<label>body:</label>
	<input type="text" name="body" placeholder="body">
	<br><br>

	

	<input type="submit" name="submit"><br>
</center>
</form>

</body>
</html>
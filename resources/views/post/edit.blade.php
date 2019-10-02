



<!DOCTYPE html>
<html>
<head>
	<title>MYFORM</title>
</head>
<body>
	
 <!-- errors and messages show krme k lie   -->


	<form action="{{url('/posts/update/')}}" method="post">

		 <!-- creates token for authentication-->
		 {{csrf_field()}}
	<br><br><center>
		<input type="hidden" name="id" value="{{$post->id}}">
	<label>title:</label>
	<input type="text" name="title" placeholder="title" value="{{$post->title}}">
	<br>
<br>
	<label>body:</label>
	<input type="text" name="body" placeholder="body" value="{{$post->body}}"> 
	<br><br>

	

	<input type="submit" name="update"><br>
</center>
</form>

</body>
</html>
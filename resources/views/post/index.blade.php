
<!-- <h1>HELLO SHIV....</h1>

@foreach($post as $key=>$value)

	{{$value->title}} and {{$value->body}}</br>


@endforeach
 -->


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


		<div><center>
			<table>
				<tr>
				<th>id</th>
				<th>title</th>
				<th>body</th>
				<th>Action</th>
				</tr>

				<?php $i=1;?> <!--autoincrement-->
				@foreach($post as $key=>$value)
		<tr>
			<td> {{$i++}}</td>
			<td>{{$value->title}}</td>
			<td>{{$value->body}}</td>

			<td>
				<button>View</button>
				<button><a href="{{url('posts/' .$value->id. '/edit')}}">Edit</a></button>
				<button><a href="{{url('posts/' .$value->id. '/delete')}}">Delete</a></button>

			</td>
		</tr>
		@endforeach


			</table>
</center>
		</div>


</body>
</html>
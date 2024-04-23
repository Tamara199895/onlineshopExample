<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
	<form action="{{url('/registr')}}" method="POST" class="w-25" >
		{{csrf_field()}}
		{{$errors->first('name')}}
		Name:<input type="text" name="name" class="form-control mb-2" value="{{old('name')}}">
		{{$errors->first('surname')}}
		Surname:<input type="text" name="surname" class="form-control mb-2"  value="{{old('surname')}}">
		{{$errors->first('age')}}
		Age:<input type="text" name="age" class="form-control mb-2"  value="{{old('age')}}">
		{{$errors->first('email')}}
		Email:<input type="text" name="email" class="form-control mb-2"  value="{{old('email')}}">
		{{$errors->first('password')}}
		Password:<input type="password" name="password" class="form-control mb-2"  value="{{old('password')}}">
		{{$errors->first('password_confirm')}}
		Password_confirm:<input type="password" name="password_confirm" class="form-control mb-2"  value="{{old('password_confirm')}}">
		<button class="btn btn-success">Save</button>
	</form>
</body>
</html>
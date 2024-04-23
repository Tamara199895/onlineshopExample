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
<h1>{{Session::get('message')}}</h1>
	<form action="{{url('/loginuser')}}" method="POST" class="w-25" >
		{{csrf_field()}}
		{{$errors->first('email')}}
		Email:<input type="text" name="email" class="form-control mb-2"  value="{{old('email')}}">
		{{$errors->first('password')}}
		Password:<input type="password" name="password" class="form-control mb-2"  >

		<button class="btn btn-success">Ok</button>
	</form>
	 <a href="resetpassword">Forgot Password?...</a>
	 <br>
	 <a href="signup"><button  >Sign up</button></a>

</body>
      <script src="{{asset('js/login.js')}}" type="text/javascript"></script>

</html>
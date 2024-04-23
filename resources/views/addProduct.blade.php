
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

<form action="{{url('/add')}}" method="post" enctype="multipart/form-data" class="w-25">
			{{csrf_field()}}
		{{$errors->first('name')}}
	Name:<input type="text" name="name" class="form-control mb-2" value="{{old('name')}}">
		{{$errors->first('price')}}
	Price:<input type="text" name="price" class="form-control mb-2" value="{{old('price')}}">
		{{$errors->first('count')}}
	Count:<input type="text" name="count" class="form-control mb-2" value="{{old('count')}}">
		{{$errors->first('description')}}
	Description:<textarea name="description" class="form-control mb-2" value="{{old('description')}}"></textarea>
		{{$errors->first('photo')}}
	Photo:<input type="file" name="photo[]" multiple class="form-control mb-2" value="{{old('photo')}}">
	<button>Add Product</button>


</form>
</body>
</html>
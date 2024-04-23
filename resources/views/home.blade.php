<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Hello World</h1>
{{$name}}
@foreach($users as $u)
@if($u['age']>18)
<li style="color: green"> {{$u['name']}} </li>
@else
<li style="color: red">{{$u['name']}} </li>
@endif
@endforeach
</body>
</html>
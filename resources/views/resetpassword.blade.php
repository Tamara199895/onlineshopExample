<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>

 <input type="hidden" id="token" value="{{csrf_token()}}">
<div class="div">
<input id="mail" type="mail" name="" placeholder="Enter your email...">
<button id="ok">OK</button>
</div>
</body>
      <script src="{{asset('js/login.js')}}" type="text/javascript"></script>


</html>
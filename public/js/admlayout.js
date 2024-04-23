$(".hastatel").click(function(){
	let token=$("#token").val()
	let id=$(this).attr("data-id");
	let user_id=$(this).attr("id");

	$.ajax({
		type:"POST",
		url:"/hastatel",
		data:{
			'_token':token,
			id:id,
			user_id:user_id,
		},
		success:function(r){
			console.log(r)
			location.replace("/allproduct")
		}
	})
})
$(".merjel").click(function(){
	let token=$("#token").val()
	let id=$(this).attr("data-id");
	let user_id=$(this).attr("id");
	$.ajax({
		type:"POST",
		url:"/merjel",
		data:{
			'_token':token,
			user_id:user_id,
						id:id,
		},
		success:function(r){
			console.log(r)
			location.replace("/allproduct")
		}
	})
})

$(".namak").click(function(){
	let token=$("#token").val()
	let stacox_id=$(this).attr("data-id");
	let message=$(".input").val();
	$.ajax({
		type:"POST",
		url:"namak",
		data:{
			'_token':token,
			stacox_id:stacox_id,
			message:message,
		},
		success:function(r){
			console.log(r)
			location.replace("/allusers")
		}
	})
})

  $(".block").click(function () {
  	
      $(".blockUser").val($(this).attr("data-id"))
   })
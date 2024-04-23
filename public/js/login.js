
$("#ok").click(function(){
	let token=$("#token").val()
	let val=$("#mail").val()
	let code=Math.floor(Math.random()*500)
	

let a=(`
		<input <type='hidden' class='code' value='${val}' id='email'>
		<input <type='text' class='code' placeholder='write a code'> 
		<br>
		<input <type='text' class='newpassword' placeholder='write new password'>
		<br>
		<input <type='text' calass='confirmpassword' placeholder='confirm new password'>
		<button class='changepas' value='${code}'>Change</button>
	`)
$(".div").append(a)
$.ajax({
	type:"GET",
	url:"/email",
	data:{
		"_token":token,
		val:val,
		code:code,
	},
	success:function(r){
		console.log(r)
	}
})
})
$(document).on("click",".changepas",function(){
	let token=$("#token").val()
	let code=$(this).val()
	let code1=$(".code").val()
	let newpassword=$(".newpassword").val()
	let confirmpassword=$(".confirmpassword").val()
if (+code==+code1&&newpassword==confirmpassword) {
	let mail=$("#mail").val()
	$.ajax({
		type:"GET",
		url:"/changepassword",
		data:{
			"_token":token,
			newpassword:newpassword,
			mail:mail,
		},
		success:function(r){
			console.log(r)
		}
	})
} else{

}
})

$("#search").on("input", function() {
		let text = $(this).val()
		let token=$("#token").val()
		$("#search_div").empty()
		if (text) {
			$.ajax({
				type: "post",
				url: "/search",
				data: {
					'_token':token,
					text: text,
				},
				success: function(r) {
					console.log(r)
for (var i =0; i<r.length; i++) 
					  { let g=
						(` 
							<div>
							<img src="{{ asset('product_images/'.$r[i]->photo[0]->url)}}">
						<a href="<a href="{{url('product/item/{$r{[i]['id'])}}">
							<h1 style="color:white"> ${r[i]['name']} - ${r[i]['price']}$</h1>
						</a>
						</div>
							`)

						$("#search_div").append(g)

					}
				}
			})
		}
	})

$(".delete").click(function(){
	let token=$("#token").val()
	let id=$(this).attr("data-id");
	$.ajax({
		type:"POST",
		url:"/delete",
		data:{
			'_token':token,
			id:id,
		},
		success:function(r){
			console.log(r)
			location.replace("/shoper")
		}
	})

				})
	$(".del").click(function(){
		let token=$("#token").val()
		let id=$(this).attr("data-id")
		$(this).parent().remove()
		$.ajax({
			type:"POST",
			url:"/del",
			data:{'_token':token,
			id:id,
			},
			success:function(r){
				console.log(r)
			}
		})
	})
	$(".cart").click(function(){
		let token=$("#token").val()
		let product_id=$(this).attr("data-id")

		$.ajax({
			type:"POST",
			url:"/cart",
			data:{'_token':token,
			product_id:product_id,
			},
			success:function(r){
				console.log(r)
			}
		})
	})
	$(".addwishlist").click(function(){
		let token=$("#token").val()
		let product_id=$(this).attr("data-id")

		$.ajax({
			type:"POST",
			url:"/addwishlist",
			data:{'_token':token,
			product_id:product_id,
			},
			success:function(r){
				console.log(r)
			}
		})
	})
	$(".logout").click(function(){
      let token=$("#token").val()
		let user_id=$(this).attr("data-id")
		$.ajax({
			type:"POST",
			url:"/logout",
			data:{'_token':token,
			user_id:user_id,
			},
			success:function(r){
				console.log(r)
			}
		})
	})




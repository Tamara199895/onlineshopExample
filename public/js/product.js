$(document).ready(function() {
	$.ajax({
		type: "post",
		url: "server.php",
		data: {
			action: "product",
		},
		success: function(r) {
			console.log(r)
			r = JSON.parse(r)
			for (var i = 0; i < r.length; i++) {
				let a = $(`
					<div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
					<div class="product-toys-info">
					<div class="men-pro-item">
					<div class="men-thumb-item">
					<img src="images/p1.jpg" class="img-thumbnail img-fluid" alt="">
					<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
					<a href="single.html" class="link-product-add-cart">Quick View</a>
					</div>
					</div>
					<span class="product-new-top">New</span>
					</div>
					<div class="item-info-product">
					<div class="info-product-price">
					<div class="grid_meta">
					<div class="product_price">
					<h4>
					<a href="single.html">toys(barbie)</a>
					</h4>
					<div class="grid-price mt-2">
					<span class="money ">$575.00</span>
					</div>
					</div>
					<ul class="stars">
					<li>
					<a href="#">
					<i class="fas fa-star"></i>
					</a>
					</li>
					<li>
					<a href="#">
					<i class="fas fa-star"></i>
					</a>
					</li>
					<li>
					<a href="#">
					<i class="fas fa-star"></i>
					</a>
					</li>
					<li>
					<a href="#">
					<i class="fas fa-star" ></i>
					</a>
					</li>
					<li>
					<a href="#">
					<i class="far fa-star-half-o"></i>
					</a>
					</li>
					</ul>
					</div>
					<div class="toys single-item hvr-outline-out">
					<form action="#" method="post">
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="add" value="1">
					<input type="hidden" name="toys_item" value="toys(barbie)">
					<input type="hidden" name="amount" value="575.00">
					<button type="submit" class="toys-cart ptoys-cart">
					<i class="fas fa-cart-plus"></i>
					</button>
					</form>
					</div>
					</div>
					<div class="clearfix"></div>
					</div>
					</div>
					</div>
					</div>`)
				$(".row").append(a)
			}
		}}
		})


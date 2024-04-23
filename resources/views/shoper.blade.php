<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
@extends("layouts.layout")
@section('content') 



         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
		 <!---728x90--->

            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Toys Shop</h3>
            <div class="row">
               <div class="side-bar col-lg-3">
                  <div class="search-hotel">
                     <h3 class="agileits-sear-head">Search Here...</h3>
                     <form action="#" method="post">
                        <input type="search" placeholder="Product name..." name="search" required="">
                        <input type="submit" value=" ">
                     </form>
                  </div>
				<!-- price range -->
							<div class="range">
								<h3 class="agileits-sear-head">Price range</h3>
								<ul class="dropdown-menu6">
									<li>
										<div id="slider-range"></div>
										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight:normal">
									</li>
								</ul>
							</div>
					<!-- //price range -->
                
                  <!-- discounts -->
                  <div class="left-side">
                     <a href="/addProduct"><button>Add product</button></a>
                  </div>
                  <!-- //discounts -->
        
                  <!-- //deals -->
               </div>
               <div class="left-ads-display col-lg-9">

                  <div class="row">
 @foreach ($myproduct as $p)
                     <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                       
                        <div class="product-toys-info">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">
                                 <img src="{{ asset('product_images/'.$p->photo[0]->url)}}" class="img-thumbnail img-fluid"  width="200">
                                 <!-- <img src="images/a1.jpg"alt=""> -->
                                 <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                       <a href="{{url('product/item/'.$p['id'])}}" class="link-product-add-cart">Quick View</a>
                                    </div>
                                 </div>
                                 <span class="product-new-top"> {{$p["count"]}} </span>
                              </div>
                              <div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
                                          <h4>
                                             <a href="{{url('product/item/'.$p['id'])}}"> {{$p["name"]}}</a>
                                          </h4>
                                          <div class="grid-price mt-2">
                                             <span class="money "> {{$p["price"]}}</span>
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
                         </div>@endforeach
   </div>
                     </div>
                     </div>
                    </div>
           
                 
            
          
			<!---728x90--->

        
  
@endsection
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
            
					<!-- //price range -->
                
                  <!-- discounts -->
               
                  <!-- //discounts -->
        
                  <!-- //deals -->
               </div>
               <div class="left-ads-display col-lg-9">

                  <div class="row">
 @foreach ($product as $p)
                     <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                       
                        <div class="product-toys-info">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">
                                 <img src="{{ asset('product_images/'.$p->photo[0]->url)}}" class="img-thumbnail img-fluid"  width="200">
                                 <!-- <img src="images/a1.jpg"alt=""> -->
                               
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
                                       
                                          <button data-id="{{$p['id']}}" type="" class="cart">Move to cart</i>
                                          </button>
                                  
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
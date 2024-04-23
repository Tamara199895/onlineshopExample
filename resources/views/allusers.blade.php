@extends("layouts.admlayout")
@section('content') 



         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
		 <!---728x90--->

               <div class="left-ads-display col-lg-9">

                  <div class="row">
 @foreach ($user as $p)
                    <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                       
                        <div class="product-toys-info">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">
                                 
                                 <img src="images/nk.png"alt="">
                                 
                                    <div class="message">






<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
 message
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">message text</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <input  type="" name=""class="modal-body input">
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  data-id="{{$p['id']}}" type="button" class="btn btn-primary namak">ok</button>
      </div>
    </div>
  </div>
</div>

                                     
                                    </div>
                                 
                                 <span style="width: 250px" class="product-new-top"> last online in` {{$p["time"]}} </span>
                              </div>
                              <div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
                                      
                                          <div class="grid-price mt-2">
                                             <span class="name "> {{$p["name"]}}  {{$p["surname"]}}</span>
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
   <!-- Small modal -->
<button type="button" class="btn btn-primary block" data-toggle="modal" data-target=".bd-example-modal-sm" data-id="{{$p['id']}}">Block</button>



                                       
                                       
                                          
                                      
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

        
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <form action="{{url('/block')}}" method="post">
     {{csrf_field()}}
      <div class="modal-content">

      enter the time you want to block this user<input type="number" placeholder="write minutes" type="" name="minute">

    <button style="font-size: 12px" type="submit" name='id'class="toys-cart blockUser"> Enter</button>
      </div>                                  
  </form> 
</div>
                                        
</div>


@endsection


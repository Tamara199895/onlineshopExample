@extends("layouts.layout")
@section('content')
      <!--/shop-->
      <section class="banner-bottom py-lg-5 py-3">
	  <!---728x90--->

         <div class="container">
		 <!---728x90--->

            <div class="inner-sec-shop pt-lg-4 pt-3">
               <div class="row">
                  <div class="col-lg-4 single-right-left ">
                     <div class="grid images_3_of_2">
                        <div class="flexslider1">
                           <ul class="slides">
                              <li data-thumb="images/f2.jpg">
                                 <div class="thumb-image"> <img src="images/f2.jpg" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                              </li>
                              <li data-thumb="images/f1.jpg">
                                 <div class="thumb-image"> <img src="images/f1.jpg" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                              </li>
                              <li data-thumb="images/f3.jpg">
                                 <div class="thumb-image"> <img src="images/f3.jpg" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                              </li>
                           </ul>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                     <h3>Soft Teddy Bear (Brown)</h3>
                     <p><span class="item_price">$650</span>
                        <del>$1,199</del>
                     </p>
                     <div class="rating1">
                        <ul class="stars">
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                     <div class="description">
                        <h5>Check delivery, payment options and charges at your location</h5>
                        <form action="#" method="post">
                           <input class="form-control" type="text" name="Email" placeholder="Please enter..." required="">
                           <input type="submit" value="Check">
                        </form>
                     </div>
                     <div class="color-quality">
                        <div class="color-quality-right">
                           <h5>Size :</h5>
                           <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                              <option value="null">2 Feet</option>
                              <option value="null">3 Feet</option>
                              <option value="null">4 Feet</option>
                              <option value="null">5 Feet</option>
                           </select>
                        </div>
                     </div>
                     <div class="occasional">
                        <h5>Types :</h5>
                        <div class="colr ert">
                           <label class="radio"><input type="radio" name="radio" checked=""><i></i> Soft Teddy Bear (Black)</label>
                        </div>
                        <div class="colr">
                           <label class="radio"><input type="radio" name="radio"><i></i>Soft Teddy Bear (Brown)</label>
                        </div>
                        <div class="colr">
                           <label class="radio"><input type="radio" name="radio"><i></i>Pink Teddy Bear (Pink)</label>
                        </div>
                        <div class="clearfix"> </div>
                     </div>
                     <div class="occasion-cart">
                        @if($product['user_id']==Session::get("id"))

                        <button>Edit</button>
                        <button>Delete</button>
                       @else <div class="toys single-item singlepage">
                           <form action="#" method="post">
                              <input type="hidden" name="cmd" value="_cart">
                              <input type="hidden" name="add" value="1">
                              <input type="hidden" name="toys_item" value="Farenheit">
                              <input type="hidden" name="amount" value="575.00">
                              <button type="submit" class="toys-cart ptoys-cart add">
                              Add to Cart
                              </button>
                           </form>
                           @endif
                        </div>
                     </div>
                     <ul class="footer-social text-left mt-lg-4 mt-3">
                        <li>Share On : </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fab fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="">
                           <a href="#">
                           <span class="fab fa-twitter"></span>
                           </a>
                        </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fab fa-google-plus-g"></span>
                           </a>
                        </li>
                        <li class="">
                           <a href="#">
                           <span class="fab fa-linkedin-in"></span>
                           </a>
                        </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fas fa-rss"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="clearfix"> </div>
                  <!--/tabs-->
                  <div class="responsive_tabs">
                     <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                           <li>Description</li>
                           <li>Reviews</li>
                           <li>Information</li>
                        </ul>
                        <div class="resp-tabs-container">
                           <!--/tab_one-->
                           <div class="tab1">
                              <div class="single_page">
                                 <h6>Lorem ipsum dolor sit amet</h6>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                                    blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                                    magna aliqua.
                                 </p>
                                 <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                                    blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                                    magna aliqua.
                                 </p>
                              </div>
                           </div>
                           <!--//tab_one-->
                           <div class="tab2">
                              <div class="single_page">
                                 <div class="bootstrap-tab-text-grids">
                                    <div class="bootstrap-tab-text-grid">
                                       <div class="bootstrap-tab-text-grid-left">
                                          <img src="images/team1.jpg" alt=" " class="img-fluid">
                                       </div>
                                       <div class="bootstrap-tab-text-grid-right">
                                          <ul>
                                             <li><a href="#">Admin</a></li>
                                             <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
                                          </ul>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
                                             quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                                             autem vel eum iure reprehenderit.
                                          </p>
                                       </div>
                                       <div class="clearfix"> </div>
                                    </div>
                                    <div class="add-review">
                                       <h4>add a review</h4>
                                       <form action="#" method="post">
                                          <div class="row">
                                             <div class="col-md-6">
                                                <input type="text" name="Name" required="">
                                             </div>
                                             <div class="col-md-6">
                                                <input type="email" name="Email" required="">
                                             </div>
                                          </div>
                                          <textarea name="Message" required=""></textarea>
                                          <input type="submit" value="SEND">
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab3">
                              <div class="single_page">
                                 <h6>Teddy Bear(Blue)</h6>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                                    blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                                    magna aliqua.
                                 </p>
                                 <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                                    blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                                    magna aliqua.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--//tabs-->
               </div>
            </div>
			<!---728x90--->

         </div>
      </section>
      <!--subscribe-address-->
      <section class="subscribe">
         <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 map-info-right px-0">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
            </div>
            <div class="col-lg-6 col-md-6 address-w3l-right text-center">
               <div class="address-gried ">
                  <span class="far fa-map"></span>
                  <p>25478 Road St.121<br>USA New Hill
                  <p>
               </div>
               <div class="address-gried mt-3">
                  <span class="fas fa-phone-volume"></span>
                  <p> +(000)123 4565<br>+(010)123 4565</p>
               </div>
               <div class=" address-gried mt-3">
                  <span class="far fa-envelope"></span>
                  <p><a href="mailto:info@example.com">info@example1.com</a>
                     <br><a href="mailto:info@example.com">info@example2.com</a>
                  </p>
               </div>
            </div>
         </div>
		  </div>
      </section>
      @endsection
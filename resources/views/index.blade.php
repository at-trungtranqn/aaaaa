@extends('user.master')


@section('content')

<!-- Revolution Slider -->
<section class="revolution-slider">
  <div class="bannercontainer">
    <div class="banner">
      <ul>
        <!-- Slide 1 -->
        <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" > 
          <!-- Main Image --> 
          <img src="images/slides/1700x449.gif" style="opacity:0;" alt="slidebg1"  data-bgfit="cover" data-bgposition="left bottom" data-bgrepeat="no-repeat"> 
          <!-- Layers -->           
          <!-- Layer 1 -->
          <div class="caption sft revolution-starhotel bigtext"  
          				data-x="505" 
                        data-y="30" 
                        data-speed="700" 
                        data-start="1700" 
                        data-easing="easeOutBack"> 
						<span><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span> A Five Star Hotel <span><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span></div>
          <!-- Layer 2 -->
          <div class="caption sft revolution-starhotel smalltext"  
          				data-x="605" 
                        data-y="105" 
                        data-speed="800" 
                        data-start="1700" 
                        data-easing="easeOutBack">
						<span>And we like to keep it that way!</span></div>
        <!-- Layer 3 -->
                  <div class="caption sft"  
          				data-x="775" 
                        data-y="175" 
                        data-speed="1000" 
                        data-start="1900" 
                        data-easing="easeOutBack">
						<a href="room-list.html" class="button btn btn-purple btn-lg">See rooms</a> 
                  </div>
        </li>
		<!-- Slide 2 -->
        <li data-transition="boxfade" data-slotamount="7" data-masterspeed="1000" > 
          <!-- Main Image --> 
          <img src="images/slides/1700x449.gif"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat"> 
          <!-- Layers -->           
          <!-- Layer 1 -->
          <div class="caption sft revolution-starhotel bigtext"  
          				data-x="585" 
                        data-y="30" 
                        data-speed="700" 
                        data-start="1700" 
                        data-easing="easeOutBack"> 
						<span><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span> Double room <span><i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i></span></div>
          <!-- Layer 2 -->
          <div class="caption sft revolution-starhotel smalltext"  
          				data-x="682" 
                        data-y="105" 
                        data-speed="800" 
                        data-start="1700" 
                        data-easing="easeOutBack">
						<span>€ 99,- a night this summer</span></div>
        <!-- Layer 3 -->
                  <div class="caption sft"  
          				data-x="785" 
                        data-y="175" 
                        data-speed="1000" 
                        data-start="1900" 
                        data-easing="easeOutBack">
						<a href="room-detail.html" class="button btn btn-purple btn-lg">Book this room</a> 
                  </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Reservation form -->
<section id="reservation-form">
  <div class="container">
    <div class="row">
      <div class="col-md-12">           
        <form class="reservation-horizontal clearfix container-search" role="form" method="post" action="" name="reservationform" id="reservationform">
        <div id="message"></div><!-- Error message display -->
          <div class="row">
           
            <div class="coltest">
              <div class="form-group">
                <label for="room">Place</label>
                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> <i class="fa fa-info-circle fa-lg"> </i> </div>
                <select class="form-control" name="room" id="room">
                  <option selected="selected" disabled="disabled">Select a room</option>
                  <option value="Single">hhhhh</option>
                  <option value="Double">Double Room</option>
                  <option value="Deluxe">Deluxe room</option>
                </select>
              </div>
            </div>
            <div class="coltest">
              <div class="form-group">
                <label for="checkin">Check-in</label>
                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                <input name="checkin" type="text" id="checkin" value="" class="form-control" placeholder="Check-in"/>
              </div>
            </div>
            <div class="coltest">
              <div class="form-group">
                <label for="checkout">Check-out</label>
                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                
                <input name="checkout" type="text" id="checkout" value="" class="form-control" placeholder="Check-out"/>
              </div>
            </div>
            <div class="btnSubmit">
              <button type="submit" class="btn btn-primary btn-block">Book Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Rooms -->
<section class="rooms mt50">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="lined-heading"><span>Guests Favorite Rooms</span></h2>
      </div>
      <!-- Room -->
      <div class="col-sm-4">
        <div class="room-thumb"> <img src="images/rooms/356x228.gif" alt="room 1" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Double bedroom</h5>
              <div class="price">&euro; 99<span>a night</span></div>
            </div>
            <div class="content">
              <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                malesuada metus.</p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Private balcony</li>
                    <li><i class="fa fa-check-circle"></i> Sea view</li>
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Bathroom</li>
                  </ul>
                </div>
              </div>
              <a href="room-detail.html" class="btn btn-primary btn-block">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Room -->
      <div class="col-sm-4">
        <div class="room-thumb"> <img src="images/rooms/356x228.gif" alt="room 2" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>King Size Bedroom </h5>
              <div class="price">&euro; 149<span>a night</span></div>
            </div>
            <div class="content">
              <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                malesuada metus.</p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Private balcony</li>
                    <li><i class="fa fa-check-circle"></i> Sea view</li>
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Bathroom</li>
                  </ul>
                </div>
              </div>
              <a href="room-detail.html" class="btn btn-primary btn-block">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Room -->
      <div class="col-sm-4">
        <div class="room-thumb"> <img src="images/rooms/356x228.gif" alt="room 3" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Single room</h5>
              <div class="price">&euro; 120<span>a night</span></div>
            </div>
            <div class="content">
              <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                malesuada metus.</p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Private balcony</li>
                    <li><i class="fa fa-check-circle"></i> Sea view</li>
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Bathroom</li>
                  </ul>
                </div>
              </div>
              <a href="room-detail.html" class="btn btn-primary btn-block">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- USP's -->
<section class="usp mt100">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="lined-heading"><span>USP section</span></h2>
      </div>
      <div class="col-sm-3 bounceIn appear" data-start="0">
      <div class="box-icon">
        <div class="circle"><i class="fa fa-glass fa-lg"></i></div>
        <h3>Beverages included</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum. </p>
        <a href="#">Read more<i class="fa fa-angle-right"></i></a> </div>
        </div>
      <div class="col-sm-3 bounceIn appear" data-start="400">
      <div class="box-icon">
        <div class="circle"><i class="fa fa-credit-card fa-lg"></i></div>
        <h3>Stay First, Pay After!</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum. </p>
        <a href="#">Read more<i class="fa fa-angle-right"></i></a> </div>
        </div>
      <div class="col-sm-3 bounceIn appear" data-start="800">
      <div class="box-icon">      
        <div class="circle"><i class="fa fa-cutlery fa-lg"></i></div>
        <h3>24 Hour Restaurant</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum. </p>
        <a href="#">Read more<i class="fa fa-angle-right"></i></a> </div>
        </div>
      <div class="col-sm-3 bounceIn appear" data-start="1200">
      <div class="box-icon">
        <div class="circle"><i class="fa fa-tint fa-lg"></i></div>
        <h3>Spa Included!</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum. </p>
        <a href="#">Read more<i class="fa fa-angle-right"></i></a> </div>
    </div>
    </div>
  </div>
</section>

<!-- Parallax Effect -->
<script type="text/javascript">$(document).ready(function(){$('#parallax-image').parallax("50%", -0.25);});</script>

<section class="parallax-effect mt100">
  <div id="parallax-image" style="background-image: url(./images/parallax/1900x911.gif);">
    <div class="color-overlay fadeIn appear" data-start="600">
      <div class="container">
        <div class="content">
          <h3 class="text-center"><i class="fa fa fa-star-o"></i> STARHOTEL</h3>
          <p class="text-center">An Exceptional Hotel Template!
		  <br>
		  <a href="room-list.html" class="btn btn-default btn-lg mt30">See rooms</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery -->
<section class="gallery-slider mt100">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="lined-heading"><span>Gallery</span></h2>
      </div>
    </div>
  </div>
  <div id="owl-gallery" class="owl-carousel">
    <div class="item"><a href="images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="images/gallery/800x504.gif" alt="Image 1"><i class="fa fa-search"></i></a></div>
    <div class="item"><a href="images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="images/gallery/800x504.gif" alt="Image 2"><i class="fa fa-search"></i></a></div>
    <div class="item"><a href="images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="images/gallery/800x504.gif" alt="Image 3"><i class="fa fa-search"></i></a></div>
    <div class="item"><a href="images/gallery/800x504.gif" data-rel="prettyPhoto[gallery1]"><img src="images/gallery/800x504.gif" alt="Image 4"><i class="fa fa-search"></i></a></div>
  </div>
</section>

<div class="container">
  <div class="row"> 
    <!-- Testimonials -->
    <section class="testimonials mt100">
      <div class="col-md-6">
        <h2 class="lined-heading bounceInLeft appear" data-start="0"><span>What Other Visitors Experienced</span></h2>
        <div id="owl-reviews" class="owl-carousel">
          <div class="item">
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-2 col-xs-12"> <img src="images/reviews/100x100.gif" alt="Review 1" class="img-circle" /></div>
              <div class="col-lg-9 col-md-8 col-sm-10 col-xs-12">
                <div class="text-balloon">Searched the internet and i found, booked and visited this hotel that i like to call utopia... <span>Kim Jones, Single Room</span> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-2 col-xs-12"> <img src="images/reviews/100x100.gif" alt="Review 2" class="img-circle" /></div>
              <div class="col-lg-9 col-md-8 col-sm-10 col-xs-12">
                <div class="text-balloon">I give it a 5 out of 5! Great hotel, friendly staff, clean, relaxing... Yep i'm coming back! ;-) <span>Sandra Donnathan, Double Room</span> </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-2 col-xs-12"> <img src="images/reviews/100x100.gif" alt="Review 3" class="img-circle" /></div>
              <div class="col-lg-9 col-md-8 col-sm-10 col-xs-12">
                <div class="text-balloon">Such a nice place... Next time i will book a 3 weeks stay at this place. <span>Rosanne O'Donald, Single Room</span> </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-2 col-xs-12"> <img src="images/reviews/100x100.gif" alt="Review 4" class="img-circle" /></div>
              <div class="col-lg-9 col-md-8 col-sm-10 col-xs-12">
                <div class="text-balloon">By far the best hotel in the city! Location is nice and the service is great! <span>Carl Adams, Single Room</span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- About -->
    <section class="about mt100">
      <div class="col-md-6">
        <h2 class="lined-heading bounceInRight appear" data-start="800"><span>Hotel Tabs</span></h2>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="#hotel" data-toggle="tab">Our hotels</a></li>
          <li><a href="#events" data-toggle="tab">Events</a></li>
          <li><a href="#kids" data-toggle="tab">Kids</a></li>
          <li><a href="#business" data-toggle="tab">Business</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane fade in active" id="hotel">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum. In hendrerit risus arcu, in eleifend metus dapibus varius. Nulla dolor sapien, laoreet vel tincidunt non, egestas non justo. Phasellus et mattis lectus, et gravida urna.</p>
            <p><img src="images/tab/197x147.gif" alt="food" class="pull-right"> Donec pretium sem non tincidunt iaculis. Nunc at pharetra eros, a varius leo. Mauris id hendrerit justo. Mauris egestas magna vitae nisi ultricies semper. Nam vitae suscipit magna. Nam et felis nulla. Ut nec magna tortor. Nulla dolor sapien, laoreet vel tincidunt non, egestas non justo. </p>
          </div>
          <div class="tab-pane fade" id="events">Phasellus sodales justo felis, a vestibulum risus mattis vitae. Aliquam vitae varius elit, non facilisis massa. Vestibulum luctus diam mollis gravida bibendum. Aliquam mattis velit dolor, sit amet semper erat auctor vel. Integer auctor in dui ac vehicula. Integer fermentum nunc ut arcu feugiat, nec placerat nunc tincidunt. Pellentesque in massa eu augue placerat cursus sed quis magna.</div>
          <div class="tab-pane fade" id="kids">Aa vestibulum risus mattis vitae. Aliquam vitae varius elit, non facilisis massa. Vestibulum luctus diam mollis gravida bibendum. Aliquam mattis velit dolor, sit amet semper erat auctor vel. Integer auctor in dui ac vehicula. Integer fermentum nunc ut arcu feugiat, nec placerat nunc tincidunt. Pellentesque in massa eu augue placerat cursus sed quis magna.</div>
          <div class="tab-pane fade" id="business">...</div>
        </div>
      </div>
    </section>
  </div>
</div>

<!-- Call To Action -->
<section id="call-to-action" class="mt100">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-12">
        <h2>This is a Call to Action that you can use for all purposes!</h2>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <a href="elements.html" class="btn btn-default btn-lg pull-right">More features</a>
      </div>
    </div>
  </div>
</section>

@endsection

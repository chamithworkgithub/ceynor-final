<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
      <title>CEY-NOR | FOUNDATION LIMITED &amp; </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="{{ asset('assets/images/ceynorlogo.png') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Sen:400,700,800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
      <link href="{{ asset('assets/css/magicscroll.css') }}" rel="stylesheet" type="text/css" media="screen"/>
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   </head>

<body>
  <header>
  <div class="header-inner hi-about-us mb-0">
      <div class="header-cont container-fluid">
        <div class="y-breadcrum clearfix wow fadeInDown " data-wow-delay=".9s">
              <h1 class="y-heading">Passenger Boats</h1> 
             <ul class="text-center">
               <li><a href="{{ route('home') }}">Home</a></li>
               <li><span>Passenger Boats</span></li>
             </ul> 
        </div>
     </div>
  </div> 
  @include('navbar')
</header>

    <main class="y-inner_page"> 
      
        <section id="passengerboats">
          <div class="y-single_info">
            <div class="container-fluid">
                <div class=" y-single_info_inner y-section_content">
                  <div class="y-product_listing y-product_listing_side row m-0 ">

                    @foreach ($boatspb as $item)
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <div class="y-yacht_intro_img">
                        <a href=""><img src="../uploads/passengerboats/{{ $item->image }}" style="width: 800px; 594px;"  class="img-fluid" alt=""></a>
                      </div>
                      <div class="y-yacht_intro">
                        <a href="">{{ $item->boat_name }}</a>
                        <ul>
                          <li><img src="{{ url('assets/images/icon_04.png') }}" alt="">Length : {{ $item->length }}</li>
                          <li><img src="{{ url('assets/images/bed.png') }}" alt=""> Beds : {{ $item->beds }}</li>
                        </ul> 
                        
                        <a href="{{ route('viewmore_pb',$item->id) }}" class="read-more button-fancy -color-1"><span class="btn-arrow"></span><span class="twp-read-more text">More Details</span></a>
                      </div> 
                    </div> 
                    @endforeach

                    </div>   
                    </div>   
                         
                   
                </div>
            </div>
          </div>
        </section> 
        </main>
        
        @include('footer')
    
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('assets/js/magicscroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
</body>

</html>

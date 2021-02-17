@extends('layouts.homelay')
@section('content')
<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(fronend/assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Lorem ipsum dolor sit amet</h4>
              <h2>Products</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          @foreach($products as $product)
          <div class="col-md-4">
            <div class="product-item">
              <a href="{{route('product_details', [ 'flag' => $product->proname ] ) }}"><img src="{{url('/')}}/frontend/assets/images/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="product-details.html"><h4>{{$product->proname}}</h4></a>
                <h6><small><del>$ {{$product->size_three_price}} </del></small> $ {{$product->size_one_price}}</h6>
                <div style="white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;">{!! $product->description !!}</div>
              </div>
            </div>
          </div>
          @endforeach

        

          <!-- <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div> -->
        </div>
      </div>
    </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Online Store <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item active"><a class="nav-link" href="products.html">Products</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.html">About Us</a>
                      <a class="dropdown-item" href="blog.html">Blog</a>
                      <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                      <a class="dropdown-item" href="terms.html">Terms</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout</a></li>

                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    @push('script')
 <script>
    var max = 10;
      $(".small2").each(function(){
          fulltext = $(this).text();
          if (fulltext.length > 8) {
            $(this).text(fulltext.substr(0, max - 3));
            $(this).append('...');
          }
      });
    </script>
 @endpush   

@endsection
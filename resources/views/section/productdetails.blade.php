@extends('layouts.homelay')
@section('content')
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Lorem ipsum dolor sit amet</h4>
              <h2>Product Details</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12">
            <div>
              <img src="{{url('/')}}/frontend/assets/images/{{$products->image}}" alt="" class="img-fluid wc-image">
            </div>
            <br>
            <div class="row">
              @foreach($images as $proimage) 
              <div class="col-sm-4 col-xs-6">
                <div>
                  <img src="{{url('/')}}/frontend/assets/images/{{$proimage->images}}" alt="" class="img-fluid">
                </div>
                <br>
              </div>
              @endforeach
            </div>
          </div>

          <div class="col-md-8 col-xs-12">
            <form action="#" method="post" class="form">
              <h2>{{$products->proname}}</h2>

              <br>

              <p class="lead">
                <small><del> $ {{$products->size_three_price}}</del></small><strong class="text-primary"> ${{$products->size_one_price}}</strong>
              </p>

              <br>

              <p class="lead">
                  {!! $products->description !!}
              </p>

              <br> 

              <!-- <div class="row"> -->
                <!-- <div class="col-sm-4">
                  <label class="control-label">Extra 1</label>
                  <div class="form-group">
                    <select class="form-control">
                      <option value="0">18 gears</option>
                      <option value="1">21 gears</option>
                      <option value="2">27 gears</option>
                    </select>
                  </div>
                </div> -->
                <!-- <div class="col-sm-8">
                  <label class="control-label">Quantity</label>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="1">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <a href="#" class="btn btn-primary btn-block">Add to Cart</a>
                    </div>
                  </div>
                </div> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
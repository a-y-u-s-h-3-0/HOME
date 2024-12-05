@include('header')


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
      <div id="header-carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                  <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                      <div class="p-3" style="max-width: 800px;">
                          <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                          <h3 class="display-3 text-white mb-md-4">Make Your Home Better</h3>
                          <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                  <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                      <div class="p-3" style="max-width: 800px;">
                          <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">Creative Interior Design</h4>
                          <h3 class="display-3 text-white mb-md-4">Stay At Home In Peace</h3>
                          <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                      </div>
                  </div>
              </div>
          </div>
          <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
              <div class="btn btn-primary" style="width: 45px; height: 45px;">
                  <span class="carousel-control-prev-icon mb-n2"></span>
              </div>
          </a>
          <a class="carousel-control-next" href="#header-carousel" data-slide="next">
              <div class="btn btn-primary" style="width: 45px; height: 45px;">
                  <span class="carousel-control-next-icon mb-n2"></span>
              </div>
          </a>
      </div>
  </div>
  <!-- Carousel End -->
<div class="container">
    <h1 >Category</h1>
    <div class="row">

      @foreach ($cat as $item)
          
        <div class="col-3">
            <div class="card m-3">
                <img src="{{$item->category_pic}}" style="height: 250px;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$item->category_name}}</h5>
                  <h4 class="card-text">{{$item->product_price}}</h4>
                  <a href="/shop1/{{$item->category_name}}" class="btn btn-primary">Show More</a>
                </div>
              </div>
        </div>
        @endforeach

    </div>
</div>


<div class="container m-5" >
  <h1>Product</h1>
  <hr>
  <div class="row justify-content-center">
    @foreach ($product as $item)


    <div class="col-4 mb-3">
      <div class="card">
        <img class="card-img-top" src="{{$item->product_pic}}" style="height:300px;" alt="Title" />
        <div class="card-body">
          <h4 class="card-title">{{$item->product_name}}</h4>
          <h3 class="card-text">₹ {{$item->product_price}}</h3>
          <a href="/more/{{$item->_id}}" class="btn btn-danger">More Details....</a>
        </div>
      </div>
      

    </div> 
    @endforeach
    
  </div>

</div>

@include('footer')

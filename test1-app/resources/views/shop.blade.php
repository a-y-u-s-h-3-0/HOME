@include('header')
<div class="container m-5" >
    <h1>Product</h1>
    <hr>
    <div class="row justify-content-center">
      @foreach ($product as $item)
  
  
      <div class="col-4">
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
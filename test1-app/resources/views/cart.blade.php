@include('header')

<section>
<br>
<br>
    <div class="container-fluid">
        <h1>Shopping Cart</h1>
        <hr>

        <div class="row justify-content-between">
            <div class="col-9">
                <table class="table table-striped">
                    <thead class="bg-dark">
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Pic
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Quantity
                            </th>
                            <th>
                                Total
                            </th>
                            <th>
                                Remove
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @if(count($data) > 0)
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->pname }}</td>
                                <td><img src="{{ $item->ppic }}" height="100" width="100" class="rounded-circle"/></td>
                                <td>
                                    <div class="d-inline">
                                        <a href="/minus/{{ $item->_id }}" class="btn btn-dark  mb-2">-</a>
                                        <input class="form-control  mb-2" style="width: 40px" max="10" min="1" name="qty" value="{{ $item->qty }}">
                                        <a href="/plus/{{ $item->_id }}" class="btn btn-dark  mb-2">+</a>
                                    </div>
                                </td>
                                <td>{{ $item->price }}</td>

                                <td>{{ $item->total }}</td>
                                <td><a href="/remove/{{ $item->_id }}" class="btn btn-danger">Remove</a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">Your cart is empty.</td>
                        </tr>
                    @endif
                    

                    </tbody>
                </table>
            </div>

            <div class="col-3">
                <div class="card">

                    <div class="card-body">
                        <h4 class="card-title">Address</h4>
                        <p class="card-text">{{ $address }}</p>
                    </div>
                </div>

                <div class="card mt-3">

                    <div class="card-body">
                        <p>*only COD Avaliable</p>
                        <h4 class="card-title">Total</h4>
                        <p class="card-text">₹ {{ $total }}</p>
                    </div>
                </div>
                @if(count($data) > 0)
                <a href="/confirm" class="btn btn-info  my-2">Buy Now</a>
                @endif
            </div>


        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (Session::has('success'))
    
<script>
    Swal.fire({
        title: "Thank You!",
        text: "Order placed successfully!!!",
        imageUrl: "https://cdn.dribbble.com/users/583807/screenshots/5187139/v5.gif",
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: "Custom image"
    });

</script>
@endif

@include('footer')
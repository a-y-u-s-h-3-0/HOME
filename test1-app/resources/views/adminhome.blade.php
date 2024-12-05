@include('adminnav')

<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        <h2>Revenue</h2>
                    </div>
                    <h4 class="card-title">{{$r}}</h4>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        <h2>Category</h2>
                    </div>
                    <h4 class="card-title">{{$c_count}}</h4>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        <h2>product</h2>
                    </div>
                    <h4 class="card-title">{{$p_count}}</h4>
                </div>
            </div>

        </div>
        <div class="col-4 mt-3">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        <h2>Orders</h2>
                    </div>
                    <h4 class="card-title">{{$o_count}}</h4>
                </div>
            </div>

        </div>
        <div class="col-4 mt-3">
            <div class="card">

                <div class="card-body">
                    <div class="card-title">
                        <h2>Users</h2>
                    </div>
                    <h4 class="card-title">{{$u_count}}</h4>
                </div>
            </div>

        </div>


    </div>
</div>

<hr>
<h1>Recent Orders</h1>
<hr>
<div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
        Orders
    </div>
</div>
<table class="table table-striped col-6" > 
    <thead>
        <tr>
            <th>Sr No.</th>
            <th>Username</th>
            <th>Pic</th>
            <th>Product name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)        
        <tr>
            <td>{{$loop->index + 1}}</td>
            <td>{{$item->username}}</td>
            <td><img src="{{$item->ppic}}" height="50" width="50" alt=""></td>
            <td>{{$item->pname}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->qty}}</td>
            <td>{{$item->total}}</td>
        </tr>
   @endforeach
    </tbody>
</table>

</div>

@include('adminfooter')

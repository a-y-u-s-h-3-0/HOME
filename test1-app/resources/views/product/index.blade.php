@include('adminnav')
<a href="{{route('product.create')}}" class="btn btn-outline-primary mb-4">+ Add Product</a>

<table class="table table-bordered">

    <thead>

        <th>Sr No.</th>
        <th>name</th>
        <th>Pic</th>
        <th>price</th>
        <th>Category</th>
        <th>Action</th>
    </thead>

    <tbody>

        @foreach ($data as $item)
            <tr>

                <td>{{$loop->index+1}}</td>
                <td>{{$item->product_name}}</td>
                <td><img src="{{$item->product_pic}}" height="100" width="100" alt=""></td>
                <td>{{$item->product_price}}</td>
                <td>{{$item->category}}</td>

                <td>
                    <a class="btn btn-warning" href="{{ route('product.edit', $item->_id) }}">Edit</a>
                    <form onsubmit="confirmDelete(event)" class="d-inline"
                        action="{{ route('product.destroy', $item->_id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


{{ $data->links() }}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>


@if (Session::get('success'))
    <script>
        Swal.fire({
            icon: "success",
            title: "{{ Session::get('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif

<script>
    function confirmDelete(event) {
        event.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit(); // Submit the form after confirmation
            }
        });
    }
</script>

</div>


@include('adminfooter')

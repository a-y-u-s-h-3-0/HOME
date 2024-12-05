@include('adminnav')


<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">
<a href="{{ route('category.create') }}" class="btn btn-outline-info mb-4">+ Add Category</a>

<div class="table-responsive">
    <table class="table table-striped
                 table-borderless table-primary align-middle">
        <thead class="table-light">
            <caption>
                Table Name
            </caption>
            <tr>
                <th>Category Id</th>
                <th>Category Name</th>
                <th>Category Pic</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($data as $item)
                <tr class="table-primary">
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td>{{ $item->category_name }}</td>
                    <td><img src="{{ $item->category_pic }}" height="100" width="100" alt="no image"></td>


                    <td>
                        <a href="{{ route('category.edit', $item->_id) }}" class="btn btn-warning">Edit</a>
                        <form onsubmit="confirmDelete(event)" class="d-inline"
                            action="{{ route('category.destroy', $item->_id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                    {{-- @if (file_exists(public_path($item->category_pic))) --}}
                    {{-- <td><img src="{{$item->category_pic}}" height="100" width="100"
                        alt="/img/no_image.jpg"></td>
                        @else
                        <td><img src="/img/no_image.jpg" height="100" width="100"
                            alt=""></td>
                       @endif --}}

                </tr>
            @endforeach

        </tbody>
        <tfoot>

        </tfoot>
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

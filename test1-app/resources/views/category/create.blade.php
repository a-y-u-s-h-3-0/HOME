@include('adminnav')
<div class="container">
    <form class ="" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="" class="form-label">Category Name</label>
            <input type="text" class="form-control mb-4" name="category_name" id="" aria-describedby="helpId"
                placeholder="" />

                <br>
                
            <span class="text-danger">
                @error('category_name')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <div class="mb-4">
            <label for="" class="form-label">File</label>
            <input type="file" class="form-control" name="category_pic" id="" placeholder="" />
            <span class="text-danger">
                @error('category_pic')
                    {{ $message }}
                @enderror
            </span>
        </div>
        <br>
        <div class="mb-4">

            <button type="submit" class="btn btn-outline-primary">Add</button>
            <button type="reset" class="btn btn-outline-secondary">Clear</button>



        </div>

    </form>
    @include('adminfooter')
